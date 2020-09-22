 <?php
error_reporting(0);
function createSlideshow($dir, $text, $num)
{
    $config = array(
        $dir,
        array(
            '.jpg',
            '.png',
            '.jpeg',
            '.gif'
        )
    );
    if ($handle = opendir($config[0])) {
    	$num2 = $num-1;
    	$num3 = 0;

        while (false !== ($file = readdir($handle))) {
            $dirFiles[] = $file;
        }

        sort($dirFiles);
        echo "<h2 id=\"h2".$text."\">" . $text . "</h2>";
        createThumbnail($dirFiles, $config, $num);
        echo '<div id="myModal'.$num.'" class="modal">
            <div class="modal-content">
            <div class="modal-header">
            <span class="close noselect" id="close'.$num.'">&times;</span>
            </div>
            <div class="modal-body">';
        createGallery($config, $dirFiles, $num, $text);
        echo "<a onclick=\"plusSlides(-1,".$num2.")\" class=\"prev noselect\" id=\"prev".$num."\">&#8249;</a><a onclick=\"plusSlides(1,".$num2.")\" class=\"next noselect\" id=\"next".$num."\">&#8250;</a><div style=\"text-align:center\" class = \"dots\">";

        foreach($dirFiles as $file){
            $file2 = str_replace(".jpg", "", $file);
                $list = explode('_', $file2);

                if ($list[0] !== "0" && $list[0] !== "." && $list[0] !== "..") {
                    $num3 += 1;
                    echo "<span class=\"dot noselect\" id=\"dot".$num2.$num3."\" onclick=\"dotPressed(".$num3.", ".$num2.", this.id)\"></span>";
                }
        }

        echo "</div></div></div></div>";
        closedir($handle);
    }
}

function createThumbnail($files, $config, $num)
{
		$numwhat=0;
        foreach ($files as $file){
                $file2 = str_replace(".jpg", "", $file);
                $list = explode('_', $file2);

                if ($list[0] == "0") {
                	$numwhat +=1;
                    echo "<div class=\"box thumbnail\" id=\"zertpic".$num.$numwhat."\"><div class=\"text\">" . $list[2] . "</div><img src=\"" . $config[0] . "/" . $file . "\"></div>";
                }
        }
}


function createGallery($config, $files, $num, $text)
{
    $franzctr=0;
            foreach ($files as $file) {
                    $file2 = str_replace(".jpg", "", $file);
                    $list = explode('_', $file2);
                    $bezeichnung;
                    $jahr;
                    $semester;
                    if ($list[0] !== "0" && $list[0] !== "." && $list[0] !== "..") {
                        if ($text == "Zeugnisse") {
                            if ($list[0] == "1") {
                                $bezeichnung = "Berufsschule";
                            }else if ($list[0] == "2") {
                                $bezeichnung = "Kantonsschule";
                            }else if ($list[0] == "3") {
                                $bezeichnung = "Sekundarschule";
                            }else if ($list[0] == "4") {
                                $bezeichnung = "Kantonsschule";
                            }
                            
                            
                            if ($list[1] == "0") {
                                $semester = "Alle Semester";
                            }else {
                                $jahr = str_replace("-", "/", $list[2]);
                                if($list[3] == "f"){
                                	$semester = "Frühlingssemester";
                                }else{
                                	$semester = "Herbstsemester";
                                }
                            }
                        } else {
                            $bezeichnung = $list[1];
                        }

                        echo "<div class=\"slideshowIMG fade whatamidoing".$num."\"><div class=\"captionText\">" . $bezeichnung . "<br>" . $semester . " " . $jahr . "</div><img class=\"mpic\" ";

                        if($bezeichnung == "Französisch"){
                            echo "id=\"franzbild".$franzctr."\"";
                            $franzctr += 1;
                        }

                        echo "src=\"" . $config[0] . "/" . $file . "\"></div>";
                    }
                }
            
        
    
}
?> 
