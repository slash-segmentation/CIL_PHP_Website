<?php

    function startsWith($haystack, $needle)
    {
         $length = strlen($needle);
         return (substr($haystack, 0, $length) === $needle);
    }

?>


<div class="container">
    <div class="row" id="browse_header">
        
        <div class="col-md-6">
           
        <div class="grid_12">
        <div class="grid_6" id="browse_header_text">
        CDeep3M PRP Demo
        </div> 
        </div>
            
        </div>
        <div class="col-md-6">
           <div class="pull-right">
           </div>
        </div>
        

        
    </div>
    <br/>
    <div class="row">
        <?php
            $count = count($image_array);
            foreach($image_array as $image)
            {
        ?>
        <div class="col-md-4">
            <?php
                if(startsWith($image, "CIL_"))
                {
                    //echo $image;
                    $id = str_replace("CIL_", "", $image);
            ?>
            <div class="thumbnail-kenburn">
                <a alt="<?php echo $image ?>" title="<?php echo $image ?>" href="https://microbial.crbs.ucsd.edu/cdeep3m_prp/<?php echo $image; ?>" target="_blank" >
                    <img src="https://cildata.crbs.ucsd.edu/media/thumbnail_display/<?php echo $id; ?>/<?php echo $id; ?>_thumbnailx140.jpg" />
                </a>
            </div>
          
            <?php
                }
                else if(startsWith($image, "CCDB_"))
                {
                    $id = str_replace("CCDB_", "", $image);
            ?>
             <div class="thumbnail-kenburn">
                <a alt="<?php echo $image ?>" title="<?php echo $image ?>" href="https://microbial.crbs.ucsd.edu/cdeep3m_prp/<?php echo $image; ?>" target="_blank" >
                    <img src="https://cildata.crbs.ucsd.edu/display_images/ccdb/ccdb_512/<?php echo $id; ?>_512v.jpg" width="140">
                </a>
            </div>
            <?php
                }
                
            ?>
        </div>
        
        <?php
            }
        ?>
    </div>
    <div class="row">
        <div class="col-md-12"><br/></div>
    </div>
</div>