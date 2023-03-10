<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="min-h-[100vh] flex justify-center items-center text-white">
    <main class="w-[380px] h-[600px] bg-white/30 rounded-[20px]">
        <header class="flex gap-5 justify-between p-3 items-center border-b pb-3">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 hover:scale-90 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
            </a>
            <h1 class="text-2xl hover:scale-95 transition-all">Private</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">
            <h2 class= "text-center text-2xl mb-6">Table Maker</h2>
        <form class= "p-2 mb-4 grid grid-cols-2  gap-4 flex  flex-col justify-center first-line:ring-1 bg-white/20 ring-white/50 rounded-md" action="" method="post">
            <div class="flex flex-col items-center gap-4">
                <label>
                    Rows:
                </label>
                <input type="range" name="nr" min="1" max="20" step="1"
                 oninput="onr.value = this.value">
                <output id="onr" class="text-2xl"  >1</output>
            </div>
            <div class="flex flex-col items-center gap-4">
                <label>
                     Columns:
                </label>
                <input type="range" name="nc" min="1" max="20" step="1"
                 oninput="onc.value = this.value">
                <output id="onc" class = "text-2xl">1</output>
            </div>  
            <button class =" p-2 bg-slate-500  w-[324px]  rounded-md hover:scale-95 transition-all">Make a table</button>
        </form>
         <?php
         class Table {
            private $nr;
            private $nc;


            public function __construct($nr, $nc) {
                $this->nr = $nr;
                $this->nc = $nc;
                $this->makeTable();
            }
            private function makeTable() {
                echo "<table class='border-collapse mx-auto'>";
                for($r=1; $r <= $this->nr; $r++){
                    echo "<tr>";
                    for($c=1; $c <= $this->nc; $c++){
                        echo "<td class='p-1 ring-1'> $r-$c </td>";
                    }
                    echo "</tr>";


                }
                echo "</table>";

            }


         }

         if($_POST) {
            $table = new Table($_POST['nr'],$_POST['nc'] );
        }
         ?>
        </section>
    </main>
    <script src="js/tailwind 3.2.4.js"></script>
</body>

</html>