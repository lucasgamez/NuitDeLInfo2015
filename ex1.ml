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

rules
  inf1: X 0 -> X;
  inf1: 0 X -> X;
  inf2: succ(X) succ(Y) -> 