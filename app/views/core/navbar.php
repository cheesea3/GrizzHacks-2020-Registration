<?php
    function navbar($items)
    {
            //"path", "name", "fontawesome"
            $arr = array(
                array("$items[0]", "$items[1]", "$items[2]"),
            );

        //for each array ($arr) pass it as value ($value)


        //$value[0] access first index, path
        //$value[2] accesses last index, fontawesome
        //$value[1] accesses middle index, name

        foreach ($arr as $value) {
            //global required to access current_page since thats outside the function
            global $CURRENT_PAGE;
            //if the current_page matches value[1] then display this, active difference.
            if ($CURRENT_PAGE == "$value[1]") {
                $navlinks = '
                    <li class="nav-item active">
                        <a class="nav-link" href="' . $value[0] . '"> 
                            <i class="' . $value[2] . '"></i> 
                            ' . $value[1] . '  
                        </a>
                    </li>
                    
                    ';
            } //if the current page does not match the array, then display this.
            else {
                $navlinks = '
                    <li class="nav-item">
                        <a class="nav-link" href="' . $value[0] . '"> 
                            <i class="' . $value[2] . '"></i> 
                            ' . $value[1] . '  
                        </a>
                    </li>
                    
                    ';
            }


            $navbar = '

                 ' . $navlinks . '


                 ';
            unset($value);
            echo $navbar;
        }
//             navbar();  calling this function ultimately echos $navbar which holds $navlinks with necessary divs around it :P
    }
