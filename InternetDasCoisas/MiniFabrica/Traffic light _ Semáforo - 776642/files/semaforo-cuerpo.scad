//Cuerpo del semáforo
$fn=100;
rotate([180,0,0])
translate([0,0,-100])
difference(){
    cylinder(h=100,r=5);
    cylinder(h=100,r=4);
    translate([5,0,0])
        sphere(r=4);
}