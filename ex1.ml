// Addition

rules
  add1: 0 X -> X;
  add2: succ(X) Y -> succ (add X Y);

trace *;

simp [left_outer]   add 2 5;

// Soustraction

rules
  moins1: X 0 -> X;
  moins1: 0 X -> X;
  moins2: succ(X) succ(Y) -> moins X Y;

trace *;

simp [left_outer]   moins 2 5;
simp [left_outer]   moins 5 2;

// Multiplication

rules
  fois1: 0 X -> 0;
  fois2: X 0 -> 0;
  fois3: X Y -> fois X Y Y;
  
  foiss1: 0 Y Z -> 0;
  foiss2: X 0 Z -> 0;
  foiss: succ(X) Y Z -> fois X add(Z Y) Z;

trace *;

simp [left_outer]   fois 2 5;

// Inférieur

rules
  inf0: X 0 -> 1;
  inf1: 0 X -> 0;
  inf2: inf 0 0 -> 0;
  infs: (succ X) (succ Y) -> inf X Y;
  
trace *;

simp [left_outer] inf 3 4

// Egal
rules
  eg0: eg 0 0 -> 1;
  eg1: eg Y 0 -> 0;
  eg2: eg 0 Y -> 0;
  egs: (succ X) (succ Y) -> eg X Y;
  
trace *;

simp [left_outer] eg 4 4