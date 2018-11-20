-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 12:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigFoot`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES
(1, 'Melba', 'Behrend', 'mbehrend0@ebay.com', 'Burn 1st deg mult sites of unsp lower limb, ex ank/ft, subs'),
(2, 'Obadiah', 'Joyner', 'ojoyner1@engadget.com', 'Unspecified injury of ureter, subsequent encounter'),
(3, 'Farah', 'Raison', 'fraison2@dagondesign.com', 'Blepharophimosis right eye, unspecified eyelid'),
(4, 'Trevor', 'Brimming', 'tbrimming3@xinhuanet.com', 'Congenital prolapse of urinary meatus'),
(5, 'Halsy', 'Delf', 'hdelf4@whitehouse.gov', 'External constriction of unspecified ear, subs encntr'),
(6, 'Micheil', 'Lillicrop', 'mlillicrop5@nytimes.com', 'Non-prs chronic ulc unsp prt of unsp lower leg w necros bone'),
(7, 'Mikey', 'Pickthorn', 'mpickthorn6@blog.com', 'Hemorrhage due to other internal prosth dev/grft, subs'),
(8, 'Birgit', 'Chattock', 'bchattock7@xinhuanet.com', 'Strain of musc/fasc/tend at thigh level, right thigh, init'),
(9, 'Marcia', 'Inder', 'minder8@dmoz.org', 'Unsp fracture of lower end of unspecified ulna, sequela'),
(10, 'Simmonds', 'Moss', 'smoss9@newsvine.com', 'Diffuse TBI w loss of consciousness of 31-59 min, sequela'),
(11, 'Lenette', 'Kernermann', 'lkernermanna@canalblog.com', 'Sprain of other part of left wrist and hand'),
(12, 'Ardis', 'Delhay', 'adelhayb@google.com', 'Subluxation of proximal interphaln joint of l little finger'),
(13, 'Maryl', 'McKern', 'mmckernc@ft.com', 'Nondisp avuls fx (chip fracture) of r talus, 7thK'),
(14, 'Jackelyn', 'Reeman', 'jreemand@statcounter.com', 'Complete traumatic trnsphal amputation of r rng fngr, subs'),
(15, 'Hynda', 'Millott', 'hmillotte@theatlantic.com', 'Donor of other specified organs or tissues'),
(16, 'Stacee', 'Sheppard', 'ssheppardf@tripod.com', 'Oth injury of right middle and inner ear, sequela'),
(17, 'Kele', 'Sapena', 'ksapenag@umich.edu', 'Fracture of bony thorax, part unsp, subs for fx w nonunion'),
(18, 'Hettie', 'Beaze', 'hbeazeh@opensource.org', 'External constriction of unspecified shoulder, subs encntr'),
(19, 'Georgianna', 'Smithend', 'gsmithendi@sohu.com', 'Legal intervnt w firearm disch, law enforc offl inj, subs'),
(20, 'Shani', 'MacArte', 'smacartej@ibm.com', 'Person injured in unsp nonmotor-vehicle acc, nontraf, init'),
(21, 'Alene', 'Gothliff', 'agothliffk@slate.com', 'Unsp opn wnd unsp frnt wall of thrx w/o penet thor cav, sqla'),
(22, 'Elora', 'Evers', 'eeversl@paginegialle.it', 'Other superficial bite of vagina and vulva, init encntr'),
(23, 'Yehudi', 'Gabbetis', 'ygabbetism@joomla.org', 'Chronic multifocal osteomyelitis, unspecified ankle and foot'),
(24, 'Darlleen', 'Woodard', 'dwoodardn@google.es', 'Alcohol use, unsp w alcoh-induce psych disorder w hallucin'),
(25, 'Gilberte', 'Durant', 'gduranto@netlog.com', 'Suprvsn of pregnancy w grand multiparity, first trimester'),
(26, 'Nikolas', 'Adamou', 'nadamoup@seattletimes.com', 'Food in trachea causing asphyxiation, initial encounter'),
(27, 'Louisa', 'Cosin', 'lcosinq@stanford.edu', 'Type 1 diabetes mellitus with hypoglycemia'),
(28, 'Rubina', 'Diggle', 'rdiggler@bizjournals.com', 'Open bite of right index finger w damage to nail, init'),
(29, 'Merrily', 'Blunsum', 'mblunsums@digg.com', 'Major contusion of left kidney'),
(30, 'Rriocard', 'McLernon', 'rmclernont@google.pl', 'Pre-exist hyp heart and chr kidney dis comp preg, unsp tri'),
(31, 'Roselle', 'Pawson', 'rpawsonu@jigsy.com', 'Holoprosencephaly'),
(32, 'Georg', 'Spat', 'gspatv@smh.com.au', 'Inj unsp muscle, fascia and tendon at shldr/up arm, unsp arm'),
(33, 'Wyatt', 'Bobasch', 'wbobaschw@npr.org', 'Unsp fx the low end l rad, 7thF'),
(34, 'Ailey', 'Brand-Hardy', 'abrandhardyx@tumblr.com', 'Displ seg fx shaft of r tibia, 7thE'),
(35, 'Clementia', 'Cullimore', 'ccullimorey@usa.gov', 'Contact with hot stove (kitchen), subsequent encounter'),
(36, 'Ninetta', 'McGoon', 'nmcgoonz@ucoz.ru', 'Toxic effect of trichloroethylene, intentional self-harm'),
(37, 'Hedi', 'Udden', 'hudden10@etsy.com', 'Nondisp osteochon fx r patella, 7thN'),
(38, 'Kele', 'Barribal', 'kbarribal11@weather.com', 'Primary blast injury of lung, unilateral, subs encntr'),
(39, 'Elvis', 'Akett', 'eakett12@mapy.cz', 'Burn of first degree of left elbow'),
(40, 'Terri-jo', 'Pellew', 'tpellew13@mysql.com', 'Lacerat abd wall w fb, left low q w/o penet perit cav, sqla'),
(41, 'Marin', 'Alliott', 'malliott14@delicious.com', 'Unspecified fracture of left pubis'),
(42, 'Luis', 'Laying', 'llaying15@paypal.com', 'Fear of flying'),
(43, 'Kellsie', 'Cordingly', 'kcordingly16@skype.com', 'Displacement of int fix of left humerus, init'),
(44, 'Katleen', 'Lamplough', 'klamplough17@nasa.gov', 'Corrosion of 3rd deg mu sites of unsp ankle and foot, init'),
(45, 'Cyrus', 'Pettecrew', 'cpettecrew18@reference.com', 'Combined immunodeficiency, unspecified'),
(46, 'Gerick', 'Bott', 'gbott19@dedecms.com', 'Nondisp fx of nk of 1st MC bone, unsp hand, 7thD'),
(47, 'Flory', 'Elger', 'felger1a@indiegogo.com', 'Orchard as the place of occurrence of the external cause'),
(48, 'Barry', 'Quadling', 'bquadling1b@bandcamp.com', 'Facial weakness following unsp cerebrovascular disease'),
(49, 'Roosevelt', 'Vardie', 'rvardie1c@sciencedirect.com', 'Disp fx of trapezium, right wrist, init for clos fx'),
(50, 'Ike', 'Garvie', 'igarvie1d@wisc.edu', 'Bloodstream infct due to central venous catheter, sequela'),
(51, 'Brody', 'Hawick', 'bhawick1e@yahoo.com', 'Displaced transverse fracture of shaft of humerus, right arm'),
(52, 'Morissa', 'Hellsdon', 'mhellsdon1f@cloudflare.com', 'Drown due to being washed ovrbrd from inflatbl crft, sequela'),
(53, 'Benedetta', 'Michieli', 'bmichieli1g@theguardian.com', 'Diffus folicl cntr lymph, nodes of ing region and lower limb'),
(54, 'Helenelizabeth', 'Bougourd', 'hbougourd1h@mashable.com', 'Nondisp fx of greater trochanter of l femr, 7thM'),
(55, 'Claude', 'Blowes', 'cblowes1i@live.com', 'Military firearm discharge, undetermined intent'),
(56, 'Goraud', 'Littlepage', 'glittlepage1j@google.ru', 'Person outside bus injured in nonclsn trnsp accident nontraf'),
(57, 'Cazzie', 'Rockhill', 'crockhill1k@multiply.com', 'Insect bite (nonvenomous) of breast'),
(58, 'Eric', 'Gabey', 'egabey1l@hubpages.com', 'Sprain of unspecified ligament of left ankle, subs encntr'),
(59, 'Ilse', 'Roos', 'iroos1m@ftc.gov', 'Underdosing of drug aff the autonomic nervous sys, sequela'),
(60, 'Bess', 'Culter', 'bculter1n@discovery.com', 'Unsp inflammatory spondylopathy, sacr/sacrocygl region'),
(61, 'Linn', 'Balloch', 'lballoch1o@wikimedia.org', 'Displ oblique fx shaft of r tibia, 7thJ'),
(62, 'Norry', 'Skirven', 'nskirven1p@wikispaces.com', 'Nodular sclerosis Hodgkin lymphoma, intra-abd lymph nodes'),
(63, 'Briano', 'Thomsson', 'bthomsson1q@list-manage.com', 'Nondisp fx of sternal end unsp clavicle, 7thD'),
(64, 'Nevile', 'Quested', 'nquested1r@google.com.au', 'Other chondrocalcinosis, right elbow'),
(65, 'Cris', 'Camplin', 'ccamplin1s@cocolog-nifty.com', 'Personal history of malignant neoplasm of eye'),
(66, 'Patience', 'Yepiskov', 'pyepiskov1t@fema.gov', 'Fistula, unspecified hand'),
(67, 'Ewen', 'Gealle', 'egealle1u@japanpost.jp', 'Poisoning by thyroid hormones and sub, self-harm, init'),
(68, 'Neille', 'Sline', 'nsline1v@imdb.com', 'Articular disc disorder of temporomandibular joint'),
(69, 'Lorine', 'Spillett', 'lspillett1w@sphinn.com', 'Anterior cerebral artery syndrome'),
(70, 'Alberta', 'Spottiswood', 'aspottiswood1x@purevolume.com', 'Perst migrn aura w/o cereb infrc, not ntrct, w/o stat migr'),
(71, 'Aridatha', 'Upston', 'aupston1y@newyorker.com', 'Occupant of hv veh injured in trnsp acc w military vehicle'),
(72, 'Skyler', 'Coburn', 'scoburn1z@ustream.tv', 'Burn unsp deg mult sites of right lower limb, except ank/ft'),
(73, 'Kaleb', 'Wildes', 'kwildes20@t.co', 'Fracture of orbital floor, right side, 7thD'),
(74, 'Onfroi', 'Hillock', 'ohillock21@sfgate.com', 'Disp fx of unsp tibial spin, 7thJ'),
(75, 'Jonie', 'Cobbled', 'jcobbled22@sogou.com', 'Posterior displaced Type II dens fracture, init for opn fx'),
(76, 'Gabbie', 'Georgiev', 'ggeorgiev23@npr.org', 'Blister (nonthermal) of right wrist, initial encounter'),
(77, 'Rafe', 'Sanderson', 'rsanderson24@purevolume.com', 'Contusion of right upper arm, initial encounter'),
(78, 'Genia', 'Manville', 'gmanville25@furl.net', 'Cardiac arrest due to anesth during preg, unsp trimester'),
(79, 'Muffin', 'Elstone', 'melstone26@auda.org.au', 'Corrosion of third degree of unspecified ear, sequela'),
(80, 'Ximenes', 'Jurczyk', 'xjurczyk27@usatoday.com', 'Jump/div into swim pool strk bottom causing oth injury, init'),
(81, 'Aldrich', 'Frid', 'afrid28@dropbox.com', 'Encounter for planned postprocedural wound closure'),
(82, 'Ekaterina', 'Abson', 'eabson29@microsoft.com', 'Nondisplaced fracture of trapezoid, right wrist'),
(83, 'Nevsa', 'Gooble', 'ngooble2a@linkedin.com', 'Laceration of musc/fasc/tend at shldr/up arm, left arm'),
(84, 'Rafaelita', 'Skelhorne', 'rskelhorne2b@lycos.com', 'Adverse effect of chloramphenicol group'),
(85, 'Mattie', 'Zuanelli', 'mzuanelli2c@un.org', 'Other secondary osteonecrosis, pelvis and femur'),
(86, 'Ania', 'Parfrey', 'aparfrey2d@google.com.br', 'Other bilateral secondary osteoarthritis of hip'),
(87, 'Kattie', 'Larvin', 'klarvin2e@illinois.edu', 'Acute and subacute allergic otitis media (serous), recur, bi'),
(88, 'Swen', 'Gomar', 'sgomar2f@nytimes.com', 'Unhappiness'),
(89, 'Ruthanne', 'Yannikov', 'ryannikov2g@mozilla.org', 'Unsp fx shaft of unsp fibula, subs for clos fx w routn heal'),
(90, 'Irma', 'Trematick', 'itrematick2h@quantcast.com', 'Malignant carcinoid tumor of the sm int, unsp portion'),
(91, 'Bill', 'McInility', 'bmcinility2i@aol.com', 'Laceration of flexor musc/fasc/tend r idx fngr at forarm lv'),
(92, 'Stan', 'Sketchley', 'ssketchley2j@redcross.org', 'Oth intartic fx low end r rad, 7thQ'),
(93, 'Audra', 'Cornfield', 'acornfield2k@hostgator.com', 'Nondisp trimalleol fx l low leg, subs for clos fx w nonunion'),
(94, 'Budd', 'Dryburgh', 'bdryburgh2l@mapy.cz', 'Acute myringitis, left ear'),
(95, 'Kizzie', 'Kestle', 'kkestle2m@hc360.com', 'Displ subtrochnt fx unsp femur, subs for clos fx w nonunion'),
(96, 'Salvidor', 'Klicher', 'sklicher2n@trellian.com', 'Dislocation of other internal joint prosthesis, sequela'),
(97, 'Brook', 'Gerbl', 'bgerbl2o@yelp.com', 'Type 1 diabetes mellitus with circulatory complications'),
(98, 'Ade', 'Curtois', 'acurtois2p@usgs.gov', 'Poisn by oth agents prim acting on the resp sys, asslt, init'),
(99, 'Nesta', 'Mahony', 'nmahony2q@time.com', 'Athletic court as place'),
(100, 'Dian', 'Nayer', 'dnayer2r@google.fr', 'Unsp injury of unsp musc/fasc/tend at wrs/hnd lv, left hand'),
(101, 'Paul', 'Ozyzniewski', 'pozyzniewski@yaho.co.uk', 'Hi there !');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
