type token =
  | CONST of (string)
  | VAR of (string)
  | NAT of (int)
  | LPAREN
  | RPAREN
  | LSQPAREN
  | RSQPAREN
  | COMMA
  | SEMICOLON
  | COLON
  | SIMP
  | RULES
  | TRACE
  | STAR
  | ARROW
  | EOF

open Parsing;;
let _ = parse_error;;
# 2 "parser.mly"

open Lang ;;

let parse_error p = (* Called by the parser function on error *)
  print_endline p;
  flush stdout
;;

# 31 "parser.ml"
let yytransl_const = [|
  260 (* LPAREN *);
  261 (* RPAREN *);
  262 (* LSQPAREN *);
  263 (* RSQPAREN *);
  264 (* COMMA *);
  265 (* SEMICOLON *);
  266 (* COLON *);
  267 (* SIMP *);
  268 (* RULES *);
  269 (* TRACE *);
  270 (* STAR *);
  271 (* ARROW *);
    0 (* EOF *);
    0|]

let yytransl_block = [|
  257 (* CONST *);
  258 (* VAR *);
  259 (* NAT *);
    0|]

let yylhs = "\255\255\
\001\000\006\000\006\000\006\000\007\000\007\000\008\000\008\000\
\005\000\010\000\010\000\011\000\009\000\009\000\002\000\002\000\
\012\000\012\000\003\000\003\000\003\000\004\000\000\000"

let yylen = "\002\000\
\007\000\001\000\001\000\001\000\001\000\003\000\001\000\002\000\
\001\000\001\000\003\000\001\000\001\000\003\000\001\000\002\000\
\006\000\004\000\002\000\001\000\002\000\003\000\002\000"

let yydefred = "\000\000\
\000\000\000\000\000\000\023\000\000\000\004\000\003\000\000\000\
\000\000\000\000\013\000\009\000\000\000\000\000\000\000\002\000\
\000\000\012\000\000\000\000\000\000\000\008\000\016\000\000\000\
\000\000\014\000\000\000\020\000\000\000\000\000\000\000\000\000\
\000\000\011\000\000\000\019\000\000\000\021\000\018\000\000\000\
\006\000\000\000\000\000\017\000\000\000\001\000\022\000"

let yydgoto = "\002\000\
\004\000\009\000\030\000\043\000\010\000\011\000\031\000\012\000\
\013\000\018\000\019\000\014\000"

let yysindex = "\011\000\
\003\255\000\000\007\255\000\000\008\255\000\000\000\000\019\255\
\011\255\012\255\000\000\000\000\019\255\007\255\019\255\000\000\
\018\255\000\000\023\255\005\255\019\255\000\000\000\000\014\255\
\019\255\000\000\022\255\000\000\024\255\020\255\025\255\027\255\
\019\255\000\000\031\255\000\000\032\255\000\000\000\000\028\255\
\000\000\038\255\019\255\000\000\033\255\000\000\000\000"

let yyrindex = "\000\000\
\000\000\000\000\000\000\000\000\001\255\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\001\000\029\255\000\000\000\000\
\036\255\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\034\255\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000"

let yygindex = "\000\000\
\000\000\030\000\000\000\000\000\248\255\000\000\010\000\033\000\
\000\000\022\000\000\000\000\000"

let yytablesize = 272
let yytable = "\017\000\
\007\000\002\000\002\000\002\000\002\000\027\000\024\000\005\000\
\006\000\007\000\008\000\001\000\032\000\028\000\003\000\002\000\
\017\000\015\000\029\000\016\000\006\000\007\000\008\000\020\000\
\040\000\025\000\021\000\026\000\033\000\035\000\037\000\027\000\
\036\000\038\000\046\000\039\000\044\000\042\000\045\000\047\000\
\010\000\015\000\005\000\023\000\041\000\022\000\034\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
\000\000\000\000\000\000\000\000\000\000\007\000\000\000\000\000\
\007\000\007\000\000\000\000\000\000\000\000\000\000\000\007\000"

let yycheck = "\008\000\
\000\000\001\001\002\001\003\001\004\001\001\001\015\000\001\001\
\002\001\003\001\004\001\001\000\021\000\009\001\012\001\015\001\
\025\000\010\001\014\001\001\001\002\001\003\001\004\001\013\001\
\033\000\008\001\015\001\005\001\015\001\008\001\011\001\001\001\
\009\001\009\001\043\000\009\001\009\001\006\001\001\001\007\001\
\005\001\013\001\009\001\014\000\035\000\013\000\025\000\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
\255\255\255\255\255\255\255\255\255\255\005\001\255\255\255\255\
\008\001\009\001\255\255\255\255\255\255\255\255\255\255\015\001"

let yynames_const = "\
  LPAREN\000\
  RPAREN\000\
  LSQPAREN\000\
  RSQPAREN\000\
  COMMA\000\
  SEMICOLON\000\
  COLON\000\
  SIMP\000\
  RULES\000\
  TRACE\000\
  STAR\000\
  ARROW\000\
  EOF\000\
  "

let yynames_block = "\
  CONST\000\
  VAR\000\
  NAT\000\
  "

let yyact = [|
  (fun _ -> failwith "parser")
; (fun __caml_parser_env ->
    let _2 = (Parsing.peek_val __caml_parser_env 5 : 'ruleList) in
    let _4 = (Parsing.peek_val __caml_parser_env 3 : 'tracespec) in
    let _6 = (Parsing.peek_val __caml_parser_env 1 : 'strategy) in
    let _7 = (Parsing.peek_val __caml_parser_env 0 : 'termListAsTerm) in
    Obj.repr(
# 29 "parser.mly"
  ( Rewr(_2, _4, _6, _7) )
# 201 "parser.ml"
               : Lang.rewr))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : string) in
    Obj.repr(
# 34 "parser.mly"
   (Const(_1))
# 208 "parser.ml"
               : 'id))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : int) in
    Obj.repr(
# 36 "parser.mly"
   (term_of_nat(_1))
# 215 "parser.ml"
               : 'id))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : string) in
    Obj.repr(
# 38 "parser.mly"
   (Var(_1))
# 222 "parser.ml"
               : 'id))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : string) in
    Obj.repr(
# 43 "parser.mly"
  ([_1])
# 229 "parser.ml"
               : 'constListCommaSep))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 2 : string) in
    let _3 = (Parsing.peek_val __caml_parser_env 0 : 'constListCommaSep) in
    Obj.repr(
# 45 "parser.mly"
  (_1::_3)
# 237 "parser.ml"
               : 'constListCommaSep))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : 'term) in
    Obj.repr(
# 50 "parser.mly"
  ([_1])
# 244 "parser.ml"
               : 'termList))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 1 : 'term) in
    let _2 = (Parsing.peek_val __caml_parser_env 0 : 'termList) in
    Obj.repr(
# 52 "parser.mly"
  (_1::_2)
# 252 "parser.ml"
               : 'termList))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : 'termList) in
    Obj.repr(
# 57 "parser.mly"
  ( term_of_term_list (List.rev _1) )
# 259 "parser.ml"
               : 'termListAsTerm))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : 'termListAsTerm) in
    Obj.repr(
# 62 "parser.mly"
  ([_1])
# 266 "parser.ml"
               : 'termListCommaSep))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 2 : 'termListAsTerm) in
    let _3 = (Parsing.peek_val __caml_parser_env 0 : 'termListCommaSep) in
    Obj.repr(
# 64 "parser.mly"
  (_1::_3)
# 274 "parser.ml"
               : 'termListCommaSep))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : 'termListCommaSep) in
    Obj.repr(
# 69 "parser.mly"
  ( term_of_pair_term_list _1 )
# 281 "parser.ml"
               : 'termListCommaSepAsTerm))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : 'id) in
    Obj.repr(
# 74 "parser.mly"
  (_1)
# 288 "parser.ml"
               : 'term))
; (fun __caml_parser_env ->
    let _2 = (Parsing.peek_val __caml_parser_env 1 : 'termListCommaSepAsTerm) in
    Obj.repr(
# 76 "parser.mly"
  (_2)
# 295 "parser.ml"
               : 'term))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 0 : 'rule) in
    Obj.repr(
# 81 "parser.mly"
  ([_1])
# 302 "parser.ml"
               : 'ruleList))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 1 : 'rule) in
    let _2 = (Parsing.peek_val __caml_parser_env 0 : 'ruleList) in
    Obj.repr(
# 83 "parser.mly"
  (_1::_2)
# 310 "parser.ml"
               : 'ruleList))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 5 : string) in
    let _3 = (Parsing.peek_val __caml_parser_env 3 : 'termListAsTerm) in
    let _5 = (Parsing.peek_val __caml_parser_env 1 : 'termListAsTerm) in
    Obj.repr(
# 88 "parser.mly"
  (Rl(_1, _3, _5))
# 319 "parser.ml"
               : 'rule))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 3 : 'termListAsTerm) in
    let _3 = (Parsing.peek_val __caml_parser_env 1 : 'termListAsTerm) in
    Obj.repr(
# 90 "parser.mly"
  (Rl("", _1, _3))
# 327 "parser.ml"
               : 'rule))
; (fun __caml_parser_env ->
    Obj.repr(
# 95 "parser.mly"
  (TraceAll)
# 333 "parser.ml"
               : 'tracespec))
; (fun __caml_parser_env ->
    Obj.repr(
# 97 "parser.mly"
  (TraceSome [])
# 339 "parser.ml"
               : 'tracespec))
; (fun __caml_parser_env ->
    let _1 = (Parsing.peek_val __caml_parser_env 1 : 'constListCommaSep) in
    Obj.repr(
# 99 "parser.mly"
  (TraceSome _1)
# 346 "parser.ml"
               : 'tracespec))
; (fun __caml_parser_env ->
    let _2 = (Parsing.peek_val __caml_parser_env 1 : string) in
    Obj.repr(
# 103 "parser.mly"
  (_2)
# 353 "parser.ml"
               : 'strategy))
(* Entry start *)
; (fun __caml_parser_env -> raise (Parsing.YYexit (Parsing.peek_val __caml_parser_env 0)))
|]
let yytables =
  { Parsing.actions=yyact;
    Parsing.transl_const=yytransl_const;
    Parsing.transl_block=yytransl_block;
    Parsing.lhs=yylhs;
    Parsing.len=yylen;
    Parsing.defred=yydefred;
    Parsing.dgoto=yydgoto;
    Parsing.sindex=yysindex;
    Parsing.rindex=yyrindex;
    Parsing.gindex=yygindex;
    Parsing.tablesize=yytablesize;
    Parsing.table=yytable;
    Parsing.check=yycheck;
    Parsing.error_function=parse_error;
    Parsing.names_const=yynames_const;
    Parsing.names_block=yynames_block }
let start (lexfun : Lexing.lexbuf -> token) (lexbuf : Lexing.lexbuf) =
   (Parsing.yyparse yytables 1 lexfun lexbuf : Lang.rewr)
