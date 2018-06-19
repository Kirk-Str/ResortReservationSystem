<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="container">
<div>
    <h3>OFFERS</h3>
</div>
<hr>

<div class="form-group">
    <form action="offerdetail.php?type=add" method="POST">
        <input type="submit" value="Add New"  class="btn btn-info" />
    </form>
</div>

<table id="offer-list" class="table table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Offer</th>
            <th>Thumbnail</th>
            <th>Caption</th>
            <th>Description</th>
            <th>Rate</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    
    <?php 
$_fh0_data = (isset($this->scope["offersList"]) ? $this->scope["offersList"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>

        <tr>
    
            <td id="<?php echo $this->scope["row"]["offer_id"];?>"><a href="./offerdetail.php?type=edit&offerId=<?php echo $this->scope["row"]["offer_id"];?>"><?php echo $this->scope["row"]["offer_id"];?></a></td>
            <td><?php echo $this->scope["row"]["offer_name"];?></td>
            <td><?php if ((isset($this->scope["row"]["thumbnail"]) ? $this->scope["row"]["thumbnail"]:null) != "") {
?><img height="80" width="80" src="data:image;base64,<?php echo $this->scope["row"]["thumbnail"];?>"<?php 
}?></td>
            <td><?php echo $this->scope["row"]["caption"];?></td>
            <td><?php echo $this->scope["row"]["description"];?></td>
            <td><?php echo $this->scope["row"]["rate"];?></td>
            <td><a href="./offerdetail.php?type=delete&offerId=<?php echo $this->scope["row"]["offer_id"];?>">Delete</a></td>

        </tr>
    
    <?php 
/* -- foreach end output */
	}
}?>
       
</table>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>