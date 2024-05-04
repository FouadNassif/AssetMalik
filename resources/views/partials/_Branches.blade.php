<div class="bg-P w-full h-auto mt-5 flex flex-wrap p-7">
    <h1 class="text-S font-bold text-2xl">Branches</h1>
    <div class="flex flex-wrap mar">
        <?php
        $data = [
            ['Rachiine Zgharta', '1st Buildind ST EAST 405 RUE'],
            ['Jbeil Beirut ', '1st House ST EAST 345 RUE'],
            ['Ehden Zgharta North Lebanon', 'Next To Fouad Nassif House'],
            ['Jbeil Beirut ', '1st House ST EAST 345 RUE'],
            ['Rachiine Zgharta', '1st Buildind ST EAST 405 RUE'],
            ['Ehden Zgharta North Lebanon', 'Next To Fouad Nassif House'],
        ];
        
        for ($i = 0; $i < count($data); $i++) {
            echo "<div class='relative mx-10 my-10 imgcon'>
                <img src='" . asset("assets/img/B" . ($i + 1) . ".jpeg") . "' alt='' class='w-BrCard h-BrCard'>
                <div class='text-S absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-full'>
                    <h1 class='text-4xl mb-7 font-medium'>" . $data[$i][0] . "</h1>
                    <p class='text-base -mt-5 mb-5'>" . $data[$i][1] . "</p> 
                    <a href='' class= 'font-black border-4 border-S bg-S text-P px-4 py-1 hover:bg-HS hover:border-HS '>BookNow</a>
                </div>
            </div>";
        }
        ?>
    </div>
</div>

<style>
    .imgcon {
        background-color: #0e0e0e5c;
    }

    .imgcon img {
        opacity: 0.3;
    }
</style>
