


<!DOCTYPE html>
<html lang="en">

<head>
     <title> NET4901 - Network technology project </title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
    <link rel="stylesheet" type="text/css" href="fullPage.js-master/jquery.fullPage.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- This following line is only necessary in the case of using the plugin option `scrollOverflow:true` -->
    <script type="text/javascript" src="fullPage.js-master/vendors/jquery.slimscroll.min.js"></script>
    
    <script type="text/javascript" src="fullPage.js-master/jquery.fullPage.js"></script>
    
    <!-- custom -->
    <link rel="stylesheet" type="text/css" href="final.css" />
    <!-- needed for NAVBAR -->
    <link rel="stylesheet" type="text/css" href="css-bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
    
    
    <!-- initalization -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#001A27', '#063852', '#F0810F'], //section color
                anchors:['Page1','Page2','Page3'],
                scrollOverflow:true,
                css3: true,
                menu:'#myNavbar' //used for section transition via menu
            }); 
        });
    </script>
    
</head>

    
    
    <body>
            <div id="header">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header"> <!-- base of the navbar -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">WPA Recovery Thingy Project</a>
                        </div>

                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li data-menuanchor="Page1"><a href="#Page1">Home</a></li>
                                <li data-menuanchor="Page2"><a href="#Page2">About the project</a></li>
                                <li data-menuanchor="Page3"><a href="#Page3">About us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav> 
            </div>

        
        <div id ="fullpage">
            <div class="section">
                <div class="slide"  id="s1" data-anchor="Page1">
                    <div class="container, datachart">
                    <h1>GRAPHS</h1>
                   <?php include 'php-alex-sql.php';?>
                        </div>
                </div>
                <div class="slide"  id="s2"> 
                    <div class="container,datagraph">
					
                   <?php include 'php-Taqi-WpsGraph.php';?>
                    
                   </div>
                    </div>
                <div class="slide"  id="s3"> 
                    <div class="container,datagraph">
                    <?php include 'php-Taqi-PassGraph.php';?>
                    </div>
                    </div>
					
				 <div class="slide"  id="s4"> 
                    <div class="container,datagraph">
                    <?php include 'php-Taqi-WCountGraph.php';?>
                    </div>
                    </div>
                    
            </div><!-- end of Main-->
            
            
            <div class="section" data-anchor="Page2">
                <div id='Project' class="container">
                    <h1>Project</h1>
                    <p>
Pecten along the beak
Ducks exploit a variety of food sources such as grasses, aquatic plants, fish, insects, small amphibians, worms, and small molluscs.

Dabbling ducks feed on the surface of water or on land, or as deep as they can reach by up-ending without completely submerging.[3] Along the edge of the beak there is a comb-like structure called a pecten. This strains the water squirting from the side of the beak and traps any food. The pecten is also used to preen feathers and to hold slippery food items.

Diving ducks and sea ducks forage deep underwater. To be able to submerge more easily, the diving ducks are heavier than dabbling ducks, and therefore have more difficulty taking off to fly.

A few specialized species such as the mergansers are adapted to catch and swallow large fish.

The others have the characteristic wide flat beak adapted to dredging-type jobs such as pulling up waterweed, pulling worms and small molluscs out of mud, searching for insect larvae, and bulk jobs such as dredging out, holding, turning head first, and swallowing a squirming frog. To avoid injury when digging into sediment it has no cere, but the nostrils come out through hard horn.

The Guardian (British newspaper) published an article on Monday 16 March 2015 advising that ducks should not be fed with bread because it damages the health of the ducks and pollutes waterways.[4]

Breeding

A Muscovy duck duckling.
The ducks are generally monogamous, although these bonds generally last only a single year. Larger species and the more sedentary species (like fast river specialists) tend to have pair-bonds that last numerous years. Most duck species breed once a year, choosing to do so in favourable conditions (spring/summer or wet seasons). Ducks also tend to make a nest before breeding, and after hatching to lead their ducklings to water. Mother ducks are very caring and protective of their young, but may abandon some of their ducklings if they are physically stuck in an area they cannot get out of (including nesting in an enclosed courtyard) or are not prospering due to genetic defects or sickness brought about by hypothermia, starvation, or disease. Ducklings can also be orphaned by inconsistent late hatching where a few eggs hatch after the mother has abandoned the nest and led her ducklings to water.[citation needed]

Most domestic ducks neglect their eggs and ducklings, and their eggs must be hatched under a broody hen or artificially.
                    </p></div>
            </div><!-- end of Project-->
            
            
            <div class="section" id= "AboutUs" data-anchor="Page3">
                <div id='AboutUs' class="container">
                    <h1>About Us</h1>
                    <p>The overall body plan of ducks is elongated and broad, and the ducks are also relatively long-necked, albeit not as long-necked as the geese and swans. The body shape of diving ducks varies somewhat from this in being more rounded. The bill is usually broad and contains serrated lamellae, which are particularly well defined in the filter-feeding species. In the case of some fishing species the bill is long and strongly serrated. The scaled legs are strong and well developed, and generally set far back on the body, more so in the highly aquatic species. The wings are very strong and are generally short and pointed, and the flight of ducks requires fast continuous strokes, requiring in turn strong wing muscles. Three species of steamer duck are almost flightless, however. Many species of duck are temporarily flightless while moulting; they seek out protected habitat with good food supplies during this period. This moult typically precedes migration.

The drakes of northern species often have extravagant plumage, but that is moulted in summer to give a more female-like appearance, the "eclipse" plumage. Southern resident species typically show less sexual dimorphism, although there are exceptions like the paradise shelduck of New Zealand which is both strikingly sexually dimorphic and where the female's plumage is brighter than that of the male. The plumage of juvenile birds generally resembles that of the female.

Behaviour

Ducks in the ponds at Khulna, Bangladesh
Feeding

Pecten along the beak
Ducks exploit a variety of food sources such as grasses, aquatic plants, fish, insects, small amphibians, worms, and small molluscs.

Dabbling ducks feed on the surface of water or on land, or as deep as they can reach by up-ending without completely submerging.[3] Along the edge of the beak there is a comb-like structure called a pecten. This strains the water squirting from the side of the beak and traps any food. The pecten is also used to preen feathers and to hold slippery food items.

Diving ducks and sea ducks forage deep underwater. To be able to submerge more easily, the diving ducks are heavier than dabbling ducks, and therefore have more difficulty taking off to fly.

A few specialized species such as the mergansers are adapted to catch and swallow large fish.

The others have the characteristic wide flat beak adapted to dredging-type jobs such as pulling up waterweed, pulling worms and small molluscs out of mud, searching for insect larvae, and bulk jobs such as dredging out, holding, turning head first, and swallowing a squirming frog. To avoid injury when digging into sediment it has no cere, but the nostrils come out through hard horn.

The Guardian (British newspaper) published an article on Monday 16 March 2015 advising that ducks should not be fed with bread because it damages the health of the ducks and pollutes waterways.[4]

Breeding

A Muscovy duck duckling.
The ducks are generally monogamous, although these bonds generally last only a single year. Larger species and the more sedentary species (like fast river specialists) tend to have pair-bonds that last numerous years. Most duck species breed once a year, choosing to do so in favourable conditions (spring/summer or wet seasons). Ducks also tend to make a nest before breeding, and after hatching to lead their ducklings to water. Mother ducks are very caring and protective of their young, but may abandon some of their ducklings if they are physically stuck in an area they cannot get out of (including nesting in an enclosed courtyard) or are not prospering due to genetic defects or sickness brought about by hypothermia, starvation, or disease. Ducklings can also be orphaned by inconsistent late hatching where a few eggs hatch after the mother has abandoned the nest and led her ducklings to water.[citation needed]

Most domestic ducks neglect their eggs and ducklings, and their eggs must be hatched under a broody hen or artificially.</p>
                </div>
            </div> <!-- end of About Us-->
        </div>
    </body>
</html>