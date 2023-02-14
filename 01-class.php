<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
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
            <h1 class="text-2xl hover:scale-95 transition-all">Class</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">
        <?php 
        class Vehicle {
           //   Attributes
           public $brand;
           public $refer;
           public $model;
           public $color;
           
           //Methods
            public function setAttributes($brand, $refer, $model, $color) {
                $this->brand = $brand;
                $this->refer = $refer;
                $this->model = $model;
                $this->color = $color;
            }

            public function getAttributes() {
                return "<div class='p-4 ring-4 mb-6 ring-white/50 rounded-md'>
                   <p><Strong> Brand : </Strong >$this->brand</p> 
                   <p><Strong> Refer : </Strong >$this->refer</p> 
                   <p><Strong> Model : </Strong >$this->model</p> 
                   <p><Strong> Color : </Strong >$this->color</p> 
                </div>";
            }
        }
         //Create An Object
        $vehicle1 = new Vehicle;
        $vehicle1 -> setAttributes('Masda', '2 Sport', '2000', 'Red');
        echo $vehicle1 ->getAttributes();

        $vehicle2 = new Vehicle;
        $vehicle2 -> setAttributes('Chevrolet', 'Onix', '2001', 'Gray');
        echo $vehicle2 ->getAttributes();



        $vehicle3 = new Vehicle;
        $vehicle3 -> setAttributes('Toyota', 'TXL', '2050', 'Black');
        echo $vehicle3 ->getAttributes();



        

        //Access  Attributes
       // echo $vehicle1->brand;
        

        ?>
        </section>
    </main>
    <script src="js/tailwind 3.2.4.js"></script>
</body>

</html>