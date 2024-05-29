<?php require ("view/partials/head.php")?> 
<?php require ("view/partials/nav.php")?> 
<?php require ("view/partials/banner.php")?> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
   
    <p><a href="/Section-1-PHP/webpage/notes" class="text-blue-500 hover:underline">GO Back..</a></p>
    <p><?= htmlspecialchars($note['body']);?></p>

    <footer class="mt-6" >
    <a href="/Section-1-PHP/webpage/note/edit?id=<?= $note['id'];?>" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>

    </footer>


    <!-- <form class="mt-6" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['id'];?>">
      <button type="submit" class="text-sm text-red-500">Delete</button>
    </form> -->

    </div>
  </main>
  <?php require ("view/partials/footer.php")?>