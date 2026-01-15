<?php if(!empty($cta)) :  ?>
<a href="<?php echo $cta['url']; ?>" <?php echo $cta['target']? 'target="_blank" rel="noopener noreferrer"' : ''; ?> class="cta-<?php echo $cta_style; ?>"><?php echo $cta['title']; ?></a>
<?php endif; ?>