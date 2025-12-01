//Base del semaforo
$fn=100;
rotate([180,0,0])
difference(){
    cylinder(h=5, r=20);
    cylinder(h=4, r=18);
    cylinder(h=100,r=5);
    translate([20,0,0])
        sphere(r=4);
}