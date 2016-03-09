
<html>
   <title>Search - The Quran Reciters</title>
   <style type="text/css">
      #error {
         color: red;
      }
   </style> 
   <body>
      <?php echo (count($error) > 0)?"The following had errors:<br /><span id=\"error\">" . implode("<br />", $error) . "</span><br /><br />":""; ?>
      <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>" Name="searchForm">
         Search For: <input type="text" Name="search" value="<?php echo isset($searchTerms)?htmlspecialchars($searchTerms):''; ?>" /><br />
         Search In:<br />
         Body: <input type="checkbox" Name="body" value="on" <?php echo isset($_GET['Name'])?"checked":''; ?> /> | 
         Title: <input type="checkbox" Name="title" value="on" <?php echo isset($_GET['URL'])?"checked":''; ?> /> | 
         Description: <input type="checkbox" Name="desc" value="on" <?php echo isset($_GET['img'])?"checked":''; ?> /><br />
                 Match All Selected Fields? <input type="checkbox" Name="matchall" value="on" <?php echo isset($_GET['matchall'])?"checked":''; ?><br /><br />
         <input type="submit" Name="submit" value="Search!" />
      </form>
      <?php echo (count($results) > 0)?"Your search term: {$searchTerms} returned:<br /><br />" . implode("", $results):""; ?>
   </body>
</html>