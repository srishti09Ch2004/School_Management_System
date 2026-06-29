<?php

$title = "Why Choose Future Academy?";

$subtitle = "We provide quality education with modern technology, experienced faculty, and a safe learning environment to help every student achieve success.";

$cards = [

    [
        "icon" => "school",
        "title" => "Smart Learning",
        "description" => "Interactive classrooms, smart boards and digital learning methods for better understanding."
    ],

    [
        "icon" => "groups",
        "title" => "Experienced Teachers",
        "description" => "Highly qualified and experienced teachers who focus on every student's overall development."
    ],

    [
        "icon" => "security",
        "title" => "Safe Campus",
        "description" => "24/7 CCTV surveillance, secure campus and disciplined environment for every student."
    ],

    [
        "icon" => "computer",
        "title" => "Digital Education",
        "description" => "Online assignments, attendance, examinations and study materials available anytime."
    ],

    [
        "icon" => "menu_book",
        "title" => "Modern Library",
        "description" => "Well-stocked digital and physical library with thousands of educational resources."
    ],

    [
        "icon" => "sports_soccer",
        "title" => "Sports Activities",
        "description" => "Indoor and outdoor sports facilities that promote physical fitness and teamwork."
    ],

    [
        "icon" => "science",
        "title" => "Science Labs",
        "description" => "Advanced laboratories equipped with modern instruments for practical learning."
    ],

    [
        "icon" => "emoji_events",
        "title" => "Excellent Results",
        "description" => "Consistent academic excellence with outstanding student performance every year."
    ]

];

?>

<section class="py-24 bg-gradient-to-b from-white to-[#f8fbfa]">

    <div class="max-w-7xl mx-auto px-6 lg:px-10">


        <div class="text-center max-w-3xl mx-auto">

            <span class="text-red-600 uppercase tracking-[4px] font-semibold">
                Why Choose Us
            </span>

            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-4">
                <?php echo $title; ?>
            </h2>

            <p class="text-gray-600 text-lg leading-8 mt-6">
                <?php echo $subtitle; ?>
            </p>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">

            <?php foreach($cards as $card){ ?>

                <!-- <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-md hover:shadow-xl hover:-translate-y-2 duration-300"> -->
                    <div class="group bg-white rounded-3xl p-8 border border-gray-200 shadow-sm
hover:shadow-2xl hover:-translate-y-3 hover:border-green-400
transition-all duration-500 relative overflow-hidden">

                    <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mb-6">

                        <span class="material-symbols-outlined text-4xl text-green-700">
                            <?php echo $card['icon']; ?>
                        </span>

                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        <?php echo $card['title']; ?>
                    </h3>

                    <p class="text-gray-600 leading-7">
                        <?php echo $card['description']; ?>
                    </p>

                </div>

            <?php } ?>

        </div>

    </div>

</section> 


