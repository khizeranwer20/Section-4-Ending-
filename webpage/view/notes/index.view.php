

<?php require ("view/partials/head.php")?> 
<?php require ("view/partials/nav.php")?> 
<?php require ("view/partials/banner.php")?> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach($notes as $note): ?>
    <ul>
    <li> 
        <a href="/Section-1-PHP/webpage/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
         <?php echo htmlspecialchars($note['body']);?>
         </a>
         </li>
         <?php endforeach;  ?>

    </ul>
    <p  class="mt-6">
       <a href="/Section-1-PHP/webpage/notes/create"  class="text-blue-500 hover:underline">Create Note.</a >   
    
    </p>
    </div>
  </main>
  <?php require ("view/partials/footer.php")?>