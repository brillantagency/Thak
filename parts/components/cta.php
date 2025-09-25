<style>
    .button {
        padding: 10px;
        border: 1px solid #FDB000;
        box-shadow: 0 0 0 4px red, 0 0 0 8px blue;
        border-radius: 5px;
        background-color: #ffffffff
        color: black;
    }
</style>
<?php if(!empty($cta)) :  ?>
<a href="<?php echo $cta['url']; ?>" <?php echo $cta['target']? 'target="_blank" rel="noopener noreferrer"' : ''; ?> class="link link--button button"><?php echo $cta['title']; ?></a>
<?php endif; ?>