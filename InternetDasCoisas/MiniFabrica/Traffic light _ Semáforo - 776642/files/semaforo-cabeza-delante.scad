// Cabeza semaforo delante
$fn=100;
rotate([90,0,0])
scale([1.5,1.5,1.5])
union(){
    difference(){
        cube(size = [12,2,25]);
        translate([10,0,0]) cube(size = [2,2,5]);
        translate([10,0,7]) cube(size = [2,2,5]);
        translate([10,0,14]) cube(size = [2,2,5]);
        translate([10,0,21]) cube(size = [2,2,4]);
        
        translate([0,0,0]) cube(size = [2,2,5]);
        translate([0,0,7]) cube(size = [2,2,5]);
        translate([0,0,14]) cube(size = [2,2,5]);
        translate([0,0,21]) cube(size = [2,2,4]);
        
        translate([2,0,0]) cube(size = [1,2,2]);
        translate([5,0,0]) cube(size = [2,2,2]);
        translate([9,0,0]) cube(size = [1,2,2]);  
      
        translate([2,0,23]) cube(size = [1,2,2]);
        translate([5,0,23]) cube(size = [2,2,2]);
        translate([9,0,23]) cube(size = [1,2,2]);
                
        translate([6,4,5.5]) 
        rotate([90,0,0]) 
        cylinder(h=10, r=2.5, $fn=100);
        
        translate([6,4,12.5]) 
        rotate([90,0,0]) 
        cylinder(h=10, r=2.5, $fn=100);
        
        translate([6,4,19.5]) 
        rotate([90,0,0]) 
        cylinder(h=10, r=2.5, $fn=100);
    }
    
    translate([6,2,5.5]) rotate([0,270,270])
        difference(){
            cylinder(h=4, r=2.5, $fn=100);
            cylinder(h=4, r=2, $fn=100);
            
            translate([-10,-5,0]) cube(10);
            
            translate([-2,0,4.2])sphere(r=4.5, $fn=100);
        }
        
    translate([6,2,12.5]) rotate([0,270,270])
        difference(){
            cylinder(h=4, r=2.5, $fn=100);
            cylinder(h=4, r=2, $fn=100);
            
            translate([-10,-5,0]) cube(10);
            
            translate([-2,0,4.2])sphere(r=4.5, $fn=100);
        }
        
    translate([6,2,19.5]) rotate([0,270,270])
        difference(){
            cylinder(h=4, r=2.5, $fn=100);
            cylinder(h=4, r=2, $fn=100);
            
            translate([-10,-5,0]) cube(10);
            
            translate([-2,0,4.2])sphere(r=4.5, $fn=100);
        }
}