rules
  add1: 0 X -> X;
  add2: succ(X) Y -> succ (add X Y);

trace *;

simp [left_outer]   add 2 5;

rules
  moins1: X 0 -> X;
  moins1: 0 X -> X;
  moins2: succ(X) succ(Y) -> moins X Y;

trace *;

simp [left_outer]   moins 2 5;
simp [left_outer]   moins 5 2;

rules
  fois1: X 0 -> X;
  fois1: 0 X-> X;
  fois2: succ(X) succ(Y) -> fois X Y;

trace *;

simp [left_outer]   fois 2 5;


