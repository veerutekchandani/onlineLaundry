var a,b,c,d,e;
function initialise() {
	a = document.getElementById("one");
	b = document.getElementById("two");
	c = document.getElementById("three");
	d = document.getElementById("four");
	e = document.getElementById("five");
}

function one() {
	initialise();
	a.style.display = "block";
    b.style.display = "none";
    c.style.display = "none";
    d.style.display = "none";
    e.style.display = "none";
}
function two() {
	initialise();
	a.style.display = "none";
	b.style.display = "block";  
    c.style.display = "none";
    d.style.display = "none";
    e.style.display = "none";
    document.getElementById("two").style.visibility="visible";
}
function three() {
	initialise();
	a.style.display = "none";  
    b.style.display = "none";
	c.style.display = "block";
    d.style.display = "none";
    e.style.display = "none";
    document.getElementById("three").style.visibility="visible";
}
function four() {
	initialise();
	a.style.display = "none";  
    b.style.display = "none";
	c.style.display = "none";
    d.style.display = "block";
    e.style.display = "none";
    document.getElementById("four").style.visibility="visible";
}
function five() {
	initialise();
	a.style.display = "none";  
    b.style.display = "none";
	c.style.display = "none";
    d.style.display = "none";
    e.style.display = "block";
    document.getElementById("five").style.visibility="visible";
}