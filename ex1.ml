// Addition

rules
  add1: 0 X -> X;
  add2: succ(X) Y -> succ (add X Y);

trace *;

simp [left_outer]   add 2 5;

// Soustraction

rules
  moins1: sub X 0 -> X;
  moins1: sub 0 X -> 0;
  moins2: sub(succ(X) succ(Y)) -> sub X Y;

trace *;

simp [left_outer]   moins 2 5;
simp [left_outer]   moins 5 2;

// Multiplication


rules
	mul1: mul 0 X -> 0;
	mul2: mul X 0 -> 0;
	mul3: mul X succ(Y) -> add X (mul X Y);

rules
	div1: div 0 X -> 0;
	divs: div X Y -> succ(div (sub X Y) Y);
	
trace *;

simp [left_outer]   fois 2 5;

// ET
 
rules
	et1: 0 0 -> 0;
	et2: 0 1 -> 0;
	et3: 1 0 -> 0;
	et4: 1 1 -> 1;
	
// OU

rules
	ou1: 0 0 -> 0;
	ou2: 0 1 -> 1;
	ou3: 1 0 -> 1;
	ou4: 1 1 -> 1;

// NOT 

rules
	not1: 0 -> 1;
	not2: 1 -> 0;
	
// IF THEN ELSE

rules
	ite1: if 1 X Y -> X;
	ite2: if 0 X Y -> Y;

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
