(* on fait d'abord a la racine et apres ailleur *)
(* Q7 *)
	let rec rewrite_in_term = fun listRule term ->
		let (trew, tch, n) = try_rewrite_rule_list listRule term in
		if tch 
			then (trew, tch, n)
		else 
			match trew with
			| Cons c as termCons -> rewrite_in_term listRule termCons
			| Var v -> raise (UnifError("Fail"))
			| Appl (t1, t2) ->
				let (trew, tch, n) = rewrite_in_term listRule t1 in
				if tch
					then (trew, tch, n)
				else rewrite_in_term listRule t2
	;;
		
(* Q9 *)
	
	let rec print_trace_step = fun trace n term ->
		match trace with
			TraceAll -> print_string ("--"^n^"-->" ^ "\n" ^ print_term term ^ "\n") 
			| TraceSome (ls) -> (match ls with
								[] -> print_string ""
								| s::ls' -> if s=n
											then print_string ("--"^n^"-->" ^ "\n" ^ print_term term ^ "\n") 
											else (print_trace_step (TraceSome ls') n term) )
;;

let affiche = fun n term ->
	
(* Q10 *)	
	let rec simp listRule tr term =
		let (trew, tch, n) = rewrite_in_term listRule term in
		if trew = term
			then 
				begin 
				print_trace_step tr n trew;
				trew;
				end
		else
			begin 
			print_trace_step tr n trew;
			simp listRule tr trew;
			end
;;
	
let trace1 = TraceAll;;
let trace2 = TraceSome [];;
let trace3 = TraceSome ["caca";"toto";"tata";"rule1"];;