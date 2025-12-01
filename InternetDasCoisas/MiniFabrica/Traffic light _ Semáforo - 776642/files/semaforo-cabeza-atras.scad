//Cabeza semaforo parte de atras
$fn=100;
rotate([90,0,0])
scale([1.5,1.5,1.5])
difference(){
    union(){
        cube(size = [12,2,25]);
        
        rotate([0,0,90])
        translate([0,-2,0])
        difference(){
            cube(size = [12,2,25]);
            translate([10,0,5]) cube(2);
            translate([10,0,12]) cube(2);
            translate([10,0,19]) cube(2);
        }
        
        rotate([0,0,90])
        translate([0,-12,0])
        difference(){
            cube(size = [12,2,25]);
            translate([10,0,5]) cube(2);
            translate([10,0,12]) cube(2);
            translate([10,0,19]) cube(2);
        }
        
        translate([0,0,23])
        difference(){
            cube(size = [12,12,2]);
            translate([3,10,0]) cube(2);
            translate([7,10,0]) cube(2); 
        }
        
        translate([0,0,-2])
        difference(){
            cube(size = [12,12,4]);
            translate([3,10,2]) cube(2);
            translate([7,10,2]) cube(2); 
        }
    }
    
    translate([6,6,-2])
        cylinder(h=2,r=5/1.5);
    
    translate([6,6,-2])
        cylinder(h=4,r=4/1.5);
}