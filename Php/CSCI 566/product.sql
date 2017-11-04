drop table if exists additionalCharges;
drop table if exists deliveryCharges;
drop table if exists orderDetails;
drop table if exists customerDetails;
drop table if exists products;



CREATE TABLE additionalCharges( state_name varchar(255), tax_charge float, shipping_charge float, handling_charge float, PRIMARY KEY (state_name)); 




INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Alabama',1,2,3);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Alaska',2,3,4);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Arizona',3,1,2);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Arkansas',1,3,2);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('California',1,1,1);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Colorado',0,1,2);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Connecticut',1,0,1);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Delaware',1,1,1);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Florida',1,0,3);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Georgia',0,0,0);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Hawaii',6,3,5);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Idaho',5,5,6);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Indiana',6,8,6);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Iowa',8,4,2);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Kansas',3,5,6);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Kentucky',5,7,7);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Louisiana',5,6,7);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Maine',2,3,4);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES ('Maryland',7,8,9);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Massachusetts ',3,4,5);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Michigan ',4,5,6);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Minnesota ',5,6,7);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Mississippi ',1,1,1);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Missouri ',2,2,2);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Montana ',3,3,3);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Nebraska ',4,4,4);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Nevada ',5,5,5);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' New Hampshire ',3,8,6);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' New Jersey ',9,6,3);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' New Mexico ',6,1,9);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' New York ',1,1,1);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' North Carolina ',10,10,10);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' North Dakota  ',3,7,9);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Ohio ',3,8,5);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Oklahoma ',0,3,7);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Oregon ',7,1,3);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Pennsylvania ',2,7,8);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Rhode Island ',6,7,8);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' South Carolina ',9,8,7);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' South Dakota ',1,5,8);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Tennessee ',9,9,9);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Texas ',8,8,8);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Utah ',7,7,7);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Vermont ',6,6,6);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Virginia ',5,5,5);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Washington ',4,4,4);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' West Virginia ',3,3,3);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Wisconsin ',2,2,2);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' Wyoming ',1,1,1);

INSERT INTO additionalCharges (state_name, tax_charge, shipping_charge, handling_charge) VALUES (' D.C. ',0,0,0);



CREATE TABLE deliveryCharges(state_name varchar(255), fast_delivery_charges float, no_of_days int, PRIMARY KEY(state_name));




INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Alabama',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Alaska',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Arizona',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Arkansas',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('California',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Colorado',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Connecticut',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Delaware',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Florida',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Georgia',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Hawaii',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Idaho',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Indiana',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Iowa',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Kansas',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Kentucky',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Louisiana',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Maine',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES ('Maryland',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Massachusetts ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Michigan ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Minnesota ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Mississippi ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Missouri ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Montana ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Nebraska ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Nevada ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' New Hampshire ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' New Jersey ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' New Mexico ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' New York ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' North Carolina ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' North Dakota  ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Ohio ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Oklahoma ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Oregon ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Pennsylvania ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Rhode Island ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' South Carolina ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' South Dakota ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Tennessee ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Texas ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Utah ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Vermont ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Virginia ',5,2);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Washington ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' West Virginia ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Wisconsin ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' Wyoming ',10,1);

INSERT INTO deliveryCharges (state_name, fast_delivery_charges, no_of_days) VALUES (' D.C. ',5,2);





CREATE TABLE products
(
product_id int,
product_name varchar(255),
weight_per_unit float,
price_per_unit float,
link varchar(255),
quantity_available int NOT NULL DEFAULT 10,
blocked int,

primary key(product_id)
);


insert into products values(1, 'windshield w/ polymer', 208.50, 0.55, 'http://blitz.cs.niu.edu/pics/shi.jpg','10','0'),
(2, 'wiper blade pair', 27.25, 2.50, 'http://blitz.cs.niu.edu/pics/wip.jpg','12','0'),
(3, 'solenoid', 42.66, 2.00, 'http://blitz.cs.niu.edu/pics/sol.jpg','11','0'),
(4, 'tiresome mettle', 183.65, 2.00, 'http://blitz.cs.niu.edu/pics/met.jpg','11','0'),
(5, 'bucket seat pair', 368.50, 3.50, 'http://blitz.cs.niu.edu/pics/sea.jpg','23','0'),
(6, '5 point harness', 207.37, 12.45, 'http://blitz.cs.niu.edu/pics/har.jpg','43','0'),
(7, 'turbo intake valve', 769.60, 2.00, 'http://blitz.cs.niu.edu/pics/val.jpg','11','0'),
(8, 'supercharger', 829.44, 333.33, 'http://blitz.cs.niu.edu/pics/anc.jpg','12','0'),
(9, 'inter cooler sweep', 235.80, 2.00, 'http://blitz.cs.niu.edu/pics/int.jpg','4','0'),
(10, 'gas cap - chrome', 29.61, 2.00, 'http://blitz.cs.niu.edu/pics/gas.jpg','23','0'),
(11, 'chrome brake pedals kit-manual', 53.32, 0.55, 'http://blitz.cs.niu.edu/pics/bra.jpg','12','0'),
(12, 'chrome brake pedals kit-automatic', 48.58, 1.95, 'http://blitz.cs.niu.edu/pics/bra.jpg','4','0'),
(13, 'intel inside window decal', 2.37, 2.00, 'http://blitz.cs.niu.edu/pics/itl.jpg','5','0'),
(14, 'niu alumni window decal', 1.60, 2.00, 'http://blitz.cs.niu.edu/pics/niu.jpg','6','0'),
(15, 'air freshener - lemon', 1.60, 3.50, 'http://blitz.cs.niu.edu/pics/lem.jpg','6','0'),
(16, 'air freshener - cherry', 1.60, 12.45, 'http://blitz.cs.niu.edu/pics/che.jpg','6'),
(17, 'air freshener - new car smell', 1.96, 2.00, 'http://blitz.cs.niu.edu/pics/usa.jpg','2','0'),
(18, 'cargo net (new model)', 29.57, 2.00, 'http://blitz.cs.niu.edu/pics/net.jpg','34','0'),
(19, 'trunk liner', 29.61, 2.00, 'http://blitz.cs.niu.edu/pics/tru.jpg','23','0'),
(20, 'floor mat - driver side', 15.41, 2.00, 'http://blitz.cs.niu.edu/pics/mat.jpg','33','0'),
(21, 'floor mat - passenger side', 15.41, 0.55, 'http://blitz.cs.niu.edu/pics/mat.jpg','2','0'),
(22, 'car detail kit', 103.08, 1.95, 'http://blitz.cs.niu.edu/pics/cdk.jpg','6','0'),
(23, 'tachometer', 35.55, 2.00, 'http://blitz.cs.niu.edu/pics/tach.jpg','7','0'),
(24, 'speedometer mph edition', 40.29, 2.00, 'http://blitz.cs.niu.edu/pics/spe.jpg','5','0'),
(25, 'gps navigation', 177.74, 3.50, 'http://blitz.cs.niu.edu/pics/gps.jpg','7','0'),
(26, 'CD/DVD/DB holder', 23.69, 0.50, 'http://blitz.cs.niu.edu/pics/dvd.jpg','7','0'),
(27, 'car charger - micro usb, 2 ft', 20.14, 2.00, 'http://blitz.cs.niu.edu/pics/cha.jpg','8','0'),
(28, 'Backup camera peephole', 11.80, 2.00, 'http://blitz.cs.niu.edu/pics/bac.jpg','7','0'),
(30, 'USB car adapter, NaviPro 2.1', 257.12, 2.00, 'http://blitz.cs.niu.edu/pics/usb.jpg','4','0'),
(31, 'Reverse Sensor, mitigatable', 59.19, 0.55, 'http://blitz.cs.niu.edu/pics/tac.jpg','7','0'),
(33, 'Part: 16-11-27 20:40', 118.48, 100.00, 'http://blitz.cs.niu.edu/pics/033.jpg','4','0'),
(40, '1969 Harley Davidson Ultimate Chopper', 57.84, 2.00, 'http://blitz.cs.niu.edu/pics/mop.jpg','45','0'),
(41, '1952 Alpine Renault 1300', 116.82, 0.55, 'http://blitz.cs.niu.edu/pics/car.jpg','4','0'),
(42, '1996 Moto Guzzi 1100i', 81.74, 1.95, 'http://blitz.cs.niu.edu/pics/mop.jpg','7'),
(43, '2003 Harley-Davidson Eagle Drag Bike', 107.85, 2.00, 'http://blitz.cs.niu.edu/pics/any.jpg','3','0'),
(44, '1972 Alfa Romeo GTA', 101.54, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','7','0'),
(45, '1962 LanciaA Delta 16V', 122.53, 3.50, 'http://blitz.cs.niu.edu/pics/car.jpg','8','0'),
(46, '1968 Ford Mustang', 112.96, 12.45, 'http://blitz.cs.niu.edu/pics/ford.jpg','8','0'),
(47, '2001 Ferrari Enzo', 113.26, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','9','0'),
(48, '1958 Setra Bus', 92.30, 2.00, 'http://blitz.cs.niu.edu/pics/bus.jpg','2','0'),
(49, '2002 Suzuki XERO', 78.52, 2.00, 'http://blitz.cs.niu.edu/pics/mop.jpg','5','0'),
(50, '1969 Corvair Monza', 105.62, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(51, '1968 Dodge Charger', 89.06, 211.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(52, '1969 Ford Falcon', 98.41, 1.95, 'http://blitz.cs.niu.edu/pics/ford.jpg','9','0'),
(53, '1970 Plymouth Hemi Cuda', 37.82, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','9','0'),
(54, '1957 Chevy Pickup', 66.00, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(55, '1969 Dodge Charger', 69.58, 3.50, 'http://blitz.cs.niu.edu/pics/car.jpg','12','0'),
(56, '1940 Ford Pickup Truck', 69.11, 12.45, 'http://blitz.cs.niu.edu/pics/ford.jpg','5','0'),
(57, '1993 Mazda RX-7', 98.96, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(58, '1937 Lincoln Berline', 71.82, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(59, '1936 Mercedes-Benz 500K Special Roadster', 28.75, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','7','0'),
(60, '1965 Aston Martin DB5', 78.16, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','3','0'),
(61, '1980s Black Hawk Helicopter', 91.56, 0.55, 'http://blitz.cs.niu.edu/pics/heli.jpg','5','0'),
(62, '1917 Grand Touring Sedan', 102.73, 1.95, 'http://blitz.cs.niu.edu/pics/car.jpg','2','0'),
(63, '1948 Porsche 356-A Roadster', 63.87, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','2','0'),
(64, '1995 Honda Civic', 111.25, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(65, '1998 Chrysler Plymouth Prowler', 120.29, 3.50, 'http://blitz.cs.niu.edu/pics/car.jpg','42','0'),
(66, '1911 Ford Town Car', 39.45, 12.45, 'http://blitz.cs.niu.edu/pics/ford.jpg','3','0'),
(67, '1964 Mercedes Tour Bus', 88.71, 2.00, 'http://blitz.cs.niu.edu/pics/bus.jpg','54','0'),
(68, '1932 Model A Ford J-Coupe', 69.30, 2.00, 'http://blitz.cs.niu.edu/pics/ford.jpg','5','0'),
(69, '1926 Ford Fire Engine', 29.53, 2.00, 'http://blitz.cs.niu.edu/pics/ford.jpg','3','0'),
(70, 'P-51-D Mustang', 58.05, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','5','0'),
(71, '1936 Harley Davidson El Knucklehead', 28.72, 0.55, 'http://blitz.cs.niu.edu/pics/mop.jpg','4','0'),
(72, '1928 Mercedes-Benz SSK', 85.98, 1.95, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(73, '1999 Indy 500 Monte Carlo SS', 67.26, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','54','0'),
(74, '1913 Ford Model T Speedster', 72.02, 2.00, 'http://blitz.cs.niu.edu/pics/ford.jpg','4','0'),
(75, '1934 Ford V8 Coupe', 40.70, 3.50, 'http://blitz.cs.niu.edu/pics/ford.jpg','6','0'),
(76, '1999 Yamaha Speed Boat', 61.15, 12.45, 'http://blitz.cs.niu.edu/pics/mop.jpg','5','0'),
(77, '18th Century Vintage Horse Carriage', 71.95, 2.00, 'http://blitz.cs.niu.edu/pics/horse.jpg','6','0'),
(78, '1903 Ford Model A', 80.93, 2.00, 'http://blitz.cs.niu.edu/pics/ford.jpg','7','0'),
(79, '1992 Ferrari 360 Spider red', 92.30, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','7','0'),
(80, '1985 Toyota Supra', 67.55, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(81, 'Collectable Wooden Train', 80.06, 0.55, 'http://blitz.cs.niu.edu/pics/train.jpg','7','0'),
(82, '1969 Dodge Super Bee', 58.11, 1.95, 'http://blitz.cs.niu.edu/pics/car.jpg','7','0'),
(83, '1917 Maxwell Touring Car', 68.17, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(84, '1976 Ford Gran Torino', 87.09, 2.00, 'http://blitz.cs.niu.edu/pics/ford.jpg','5','0'),
(85, '1948 Porsche Type 356 Roadster', 73.66, 3.50, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(86, '1957 Vespa GS150', 39.05, 12.45, 'http://blitz.cs.niu.edu/pics/mop.jpg','5','0'),
(87, '1941 Chevrolet Special Deluxe Cabriolet', 76.52, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(88, '1970 Triumph Spitfire', 108.92, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(89, '1932 Alfa Romeo 8C2300 Spider Sport', 51.26, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(90, '1904 Buick Runabout', 62.40, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(91, '1940s Ford truck', 100.43, 0.55, 'http://blitz.cs.niu.edu/pics/ford.jpg','6','0'),
(92, '1939 Cadillac Limousine', 27.42, 1.95, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(93, '1957 Corvette Convertible', 82.86, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(94, '1957 Ford Thunderbird', 40.53, 2.00, 'http://blitz.cs.niu.edu/pics/ford.jpg','5','0'),
(95, '1970 Chevy Chevelle SS 454', 58.34, 3.50, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(96, '1970 Dodge Coronet', 38.36, 12.45, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(97, '1997 BMW R 1100 S', 72.11, 2.00, 'http://blitz.cs.niu.edu/pics/mop.jpg','7','0'),
(98, '1966 Shelby Cobra 427 S/C', 34.57, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','4','0'),
(99, '1928 British Royal Navy Airplane', 79.08, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','6','0'),
(100, '1939 Chevrolet Deluxe Coupe', 26.74, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(101, '1960 BSA Gold Star DBD34', 44.22, 0.55, 'http://blitz.cs.niu.edu/pics/mop.jpg','5','0'),
(102, '18th century schooner', 97.56, 1.95, 'http://blitz.cs.niu.edu/pics/ship.jpg','5','0'),
(103, '1938 Cadillac V-16 Presidential Limousine', 24.42, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(104, '1962 Volkswagen Microbus', 72.67, 2.00, 'http://blitz.cs.niu.edu/pics/bus.jpg','5','0'),
(105, '1982 Ducati 900 Monster', 55.81, 3.50, 'http://blitz.cs.niu.edu/pics/mop.jpg','5','0'),
(106, '1949 Jaguar XK 120', 55.99, 12.45, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(107, '1958 Chevy Corvette Limited Edition', 18.85, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','3','0'),
(108, '1900s Vintage Bi-Plane', 40.57, 2.00, 'http://blitz.cs.niu.edu/pics/any.jpg','3','0'),
(109, '1952 Citroen-15CV', 86.28, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(110, '1982 Lamborghini Diablo', 19.24, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(111, '1912 Ford Model T Delivery Wagon', 55.58, 0.55, 'http://blitz.cs.niu.edu/pics/ford.jpg','4','0'),
(112, '1969 Chevrolet Camaro Z28', 59.84, 1.95, 'http://blitz.cs.niu.edu/pics/car.jpg','4','0'),
(113, '1971 Alpine Renault 1600s', 45.71, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(114, '1937 Horch 930V Limousine', 31.16, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(115, '2002 Chevy Corvette', 73.60, 3.50, 'http://blitz.cs.niu.edu/pics/car.jpg','5','0'),
(116, '1940 Ford Delivery Sedan', 57.63, 12.45, 'http://blitz.cs.niu.edu/pics/ford.jpg','3','0'),
(117, '1956 Porsche 356A Coupe', 116.48, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','3','0'),
(118, 'Corsair F4U ( Bird Cage)', 34.76, 2.00, 'http://blitz.cs.niu.edu/pics/cor.jpg','3','0'),
(119, '1936 Mercedes Benz 500k Roadster', 25.78, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','3','0'),
(120, '1992 Porsche Cayenne Turbo Silver', 82.68, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','3','0'),
(121, '1936 Chrysler Airflow', 68.09, 0.55, 'http://blitz.cs.niu.edu/pics/car.jpg','3','0'),
(122, '1900s Vintage Tri-Plane', 42.93, 1.95, 'http://blitz.cs.niu.edu/pics/any.jpg','4','0'),
(123, '1961 Chevrolet Impala', 38.30, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','4','0'),
(124, '1980’s GM Manhattan Express', 63.90, 2.00, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(125, '1997 BMW F650 ST', 79.30, 3.50, 'http://blitz.cs.niu.edu/pics/mop.jpg','6','0'),
(126, '1982 Ducati 996 R', 28.60, 12.45, 'http://blitz.cs.niu.edu/pics/mop.jpg','6','0'),
(127, '1954 Greyhound Scenicruiser', 30.78, 2.00, 'http://blitz.cs.niu.edu/pics/bus.jpg','6','0'),
(128, '1950''s Chicago Surface Lines Streetcar', 31.66, 2.00, 'http://blitz.cs.niu.edu/pics/scar.jpg','6','0'),
(129, '1996 Peterbilt 379 Stake Bed with Outrigger', 39.82, 2.00, 'http://blitz.cs.niu.edu/pics/peter.jpg','8','0'),
(130, '1928 Ford Phaeton Deluxe', 39.13, 2.00, 'http://blitz.cs.niu.edu/pics/ford.jpg','8','0'),
(131, '1974 Ducati 350 Mk3 Desmo', 66.51, 0.55, 'http://blitz.cs.niu.edu/pics/mop.jpg','5','0'),
(132, '1930 Buick Marquette Phaeton', 32.07, 1.95, 'http://blitz.cs.niu.edu/pics/car.jpg','4','0'),
(133, 'Diamond T620 Semi-Skirted Tanker', 80.92, 2.00, 'http://blitz.cs.niu.edu/pics/ship.jpg','4','0'),
(134, '1962 City of Detroit Streetcar', 44.42, 2.00, 'http://blitz.cs.niu.edu/pics/scar.jpg','4','0'),
(135, '2002 Yamaha YZR M1', 40.49, 3.50, 'http://blitz.cs.niu.edu/pics/mop.jpg','4','0'),
(136, 'The Schooner Bluenose', 40.29, 12.45, 'http://blitz.cs.niu.edu/pics/ship.jpg','4','0'),
(137, 'American Airlines: B767-300', 60.61, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','4','0'),
(138, 'The Mayflower', 51.31, 2.00, 'http://blitz.cs.niu.edu/pics/ship.jpg','4','0'),
(139, 'HMS Bounty', 47.20, 2.00, 'http://blitz.cs.niu.edu/pics/ship.jpg','3','0'),
(140, 'America West Airlines B757-200', 81.52, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','54','0'),
(141, 'The USS Constitution Ship', 40.26, 0.55, 'http://blitz.cs.niu.edu/pics/ship.jpg','5','0'),
(142, '1982 Camaro Z28', 55.14, 1.95, 'http://blitz.cs.niu.edu/pics/car.jpg','6','0'),
(143, 'ATA: B757-300', 70.30, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','5','0'),
(144, 'F/A 18 Hornet 1/72', 64.46, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','5','0'),
(145, 'The Titanic', 60.53, 3.50, 'http://blitz.cs.niu.edu/pics/ship.jpg','7','0'),
(146, 'The Queen Mary', 63.55, 12.45, 'http://blitz.cs.niu.edu/pics/ship.jpg','4','0'),
(147, 'American Airlines: MD-11S', 42.98, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','3','0'),
(148, 'Boeing X-32A JSF', 38.84, 2.00, 'http://blitz.cs.niu.edu/pics/air.jpg','8','0'),
(149, 'Pont Yacht', 39.45, 2.00, 'http://blitz.cs.niu.edu/pics/ship.jpg','4','0');



CREATE TABLE customerDetails
(
customer_name varchar(255),
phone int,
address varchar(255),
email varchar(255),

primary key(customer_name)
);



CREATE TABLE orderDetails
(
customer_name varchar(255),
order_id int auto_increment,
product_id int,
total_price float,
quantity  int,
weight float,
date_of_order date,
status varchar(255),
no_of_days int,

primary key(order_id),
foreign key(customer_name) references customerDetails(customer_name),
foreign key(product_id) references products(product_id)
);





