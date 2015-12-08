(* TODO: Rewriting *)

open Lang;;
open Subst;;
open Unif;;
open Interf;;

(* Le truc qui manque *)

(*let rec rewrite_in_term_aux = fun l r t ->
match t with
Var x as x' -> if x' = l then r else x'
| Const c as c' -> if c' =l then r else c'
| Appl(t1,t2) as ter -> 
if ter = l 
then r 
else Appl(rewrite_in_term_aux l r t1, rewrite_in_term_aux l r t2) *)

(* type rewr_result = Rr of term * bool * string;; *)

(* Fin du bordel *)

(* simplify a term until no more rewrite step succeeds *)
let rec simp rls trspec t = t


(* Different rewrite strategies *)


let leftmost_outermost l r t (lrew, lch, ln) (rrew, rch, rn) (trew, tch, tn) =
  if tch
  then (trew, tch, tn)
  else if lch
  then (Appl(lrew, r), lch, ln)
  else (Appl(l, rrew), rch, rn)


let parse_and_simp infile = 
  match parse infile with
    Rewr (rls, trspec, sn, t) -> 
      print_term (simp rls trspec t)
;;

(* map strategy name to strategy *)
let map_strat_name = function
  | "left_outer" -> Eager leftmost_outermost
  | n -> failwith ("strategy " ^ n ^ " not implemented.")


(* try_rewrite returns the rewritten term, and:
   - true if there is a change in the term
   - false if there is no change (even if rule was applicable without change)
*)

let try_rewrite l r t = 
  match unif_option t l with
  | None -> (t, false)
  | Some sb -> 
    let trew = apply_subst r sb in (trew, trew != t)

(* try to rewrite with rule list rls in term t,
   selecting the first applicable rule.
   Returns:
   the rewritten term, 
   true/false indicating change,
   the name of the applied rule (or empty string)
*)

let rec try_rewrite_rule_list rls t =
  match rls with
  | [] -> (t, false, "")
  | Rl(n, l, r) :: rls' -> 
    let (trew, tch) = try_rewrite l r t in
    if tch 
    then (trew, tch, n)
    else try_rewrite_rule_list rls' t

(* simplify a term until no more rewrite step succeeds *)
let rec simp rls trspec t = t

(* on fait d'abord a la racine et apres ailleur *)
(* Q7 *)
	let rec rewrite_in_term = fun listRule term ->
		let (trew, tch, n) = try_rewrite_rule_list listRule term in
		if tch 
			then (trew, tch, n)
		else 
			match trew with
			| Const c as termCons -> rewrite_in_term listRule termCons
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

(*let affiche = fun n term ->*)
	
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