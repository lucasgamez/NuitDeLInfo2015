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

val start :
  (Lexing.lexbuf  -> token) -> Lexing.lexbuf -> Lang.rewr
