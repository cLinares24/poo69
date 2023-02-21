<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct</title>
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
            <h1 class="text-2xl hover:scale-95 transition-all">Construct</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">
        <?php
            class PlayList {
                //Attributes
                private $name;
                private $artist = array();
                private $album  = array();
                private $cover  = array();
                private $year   = array();
                
                //Methods
                public function __construct($name) {
                    $this ->name = $name;
                }
                public function setPlayList($artist, $album, $cover, $year) {
                    $this ->artist[] = $artist;
                    $this ->album[]  = $album;
                    $this ->cover[]  = $cover;
                    $this ->year[]   = $year;
                }
                public function getPlayList() {
                   echo "<div class='p-2 flex flex-col gap-2 items-center ring-8 text-white/80 rounded-md'>
                        <h2 class='my-2 text-xl font-bold'>
                             Play List: $this->name
                        </h2>";
                        for($i = 0; $i <= count($this->artist); $i++) { 
                        echo "<img class ='rounded-md'  src='".$this->cover[$i]."' alt= 'Album Cover'>
                        <p><strong>Artist: </strong> ".$this ->artist[$i]."
                        <p><strong>Year: </strong> ".$this ->year[$i]."</p>";
                    }
                  echo "</div>"; 
                }
            

            }
            $playList = new PlayList('Despecho');
            $playList ->setPlayList('Luis Alberto','Despecho','https://tinyurl.com/3rbk7ttf',2000);
            $playList ->setPlayList('Dario Gomez','Despecho','https://cdns-images.dzcdn.net/images/cover/de6989b161322fd974e5286f1d08b3ef/264x264.jpg',2001);
            $playList ->setPlayList('Charrito Negro','Despecho','https://cdns-images.dzcdn.net/images/cover/e3640f8e5927ed7c8beea1d1c88f2bc9/350x350.jpg',2002);
            $playList->getPlayList();
        ?>
        </section>
    </main>
    <script src="js/tailwind 3.2.4.js"></script>
</body>

</html>