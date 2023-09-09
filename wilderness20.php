<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./components/head.php") ?>
</head>

<body>
    <!-- Header -->
    <?php include("./components/header.php") ?>
    <!-- Nav Mobile -->
    <?php include("./components/navMobile.php") ?>

    <!-- Main Body Start -->
    <main class="pt-16">
        <section class="my-4 singleEvent containerNinish mx-auto px-2">
            <div class="singleEventBanner">
                <img src="./assets/images/wilderness/banner.jpg" alt="Wilderness Open 2020 Banner">
            </div>
            <div
                class="singleEventHeader absolute text-white top-1/2 left-1/2 -translate-x-1/2  -translate-y-1/2 text-center">
                <h1 class="text-4xl sm:text-5xl font-semibold">Wilderness Open 2020</h1>
                <p class="text-slate-400 text-lg mt-2">দক্ষিন এশিয়ার সবথেকে বড় বিতর্ক প্রতিযোগিতা</p>
            </div>
        </section>

        <!-- Event Details Section Start -->
        <section class="py-16 bg-white">
            <!-- Section Title Start -->
            <div class="text-center pb-4">
                <p class="flex justify-center items-center gap-1 text-violet-700 text-sm font-semibold">
                    <span>
                        <i class='bx bx-detail'></i>
                    </span>
                    বিবরণী
                </p>
                <h1 class="text-4xl sm:text-5xl font-semibold mt-2">আয়োজন বিবরণী</h1>
            </div>
            <!-- Section Title End -->
            <div class="containerNinish mx-auto px-2 ">
                <div class="text-xl py-8 italic text-justify grid gap-6">
                    <p>
                        <span class="bg-yellow-200 px-2 font-semibold rounded-md">দক্ষিন এশিয়ার সবথেকে বড় বিতর্ক
                            প্রতিযোগিতা</span>
                        আয়োজন করে নিণীষ ২০২০ সালে । যে খানে বাংলাদেশ সহ দক্ষিন এশিয়ার সর্বমোট ১২০ টি দল অংশগ্রহন করে
                        প্রাথমিক
                        পর্যায়ে । প্রতিযোগিতাটি হয় অনলাইন প্লাটফর্ম ‘ডিসকর্ড’ ব্যাবহার করে।
                    </p>
                    <p>
                        প্রতিযোগিতায় বিচারক হিসেবে দ্বায়িত্ব পালন করে দক্ষিন এশিয়ার নামকরা সব বিশ্ববিদ্যালয়ের খ্যাতনামা
                        সব বিতার্কিক। তাদের নির্ভুল এবং বিচক্ষন বিচারের দ্বারা যোগ্য দলটিই নিয়ে নেয়
                        <span class="bg-green-200 px-2 font-semibold rounded-md">Wilderness Open 2020 এর মুকুট।</span>
                    </p>
                </div>
            </div>
        </section>
        <!-- Event Details Section End -->


        <!-- Gallery Section Start -->
        <section class="containerNinish mx-auto px-2 py-16">
            <!-- Section Title Start -->
            <div class="text-center pb-4">
                <p class="flex justify-center items-center gap-1 text-violet-700 text-sm font-semibold">
                    <span>
                        <i class='bx bx-photo-album'></i>
                    </span>
                    গ্যালারি
                </p>
                <h1 class="text-4xl sm:text-5xl font-semibold mt-2">Wilderness Open 2020</h1>
            </div>
            <!-- Section Title End -->
            <div class="md:columns-3 space-y-6 py-8 max-w-4xl mx-auto">
                <img class="rounded-md shadow" src="./assets/images/wilderness/1.jpg"
                    alt="Wilderness Open 2020 Gallery">
                <img class="rounded-md shadow" src="./assets/images/wilderness/4.jpg"
                    alt="Wilderness Open 2020 Gallery">
                <img class="rounded-md shadow" src="./assets/images/wilderness/5.jpg"
                    alt="Wilderness Open 2020 Gallery">
                <img class="rounded-md shadow" src="./assets/images/wilderness/6.jpg"
                    alt="Wilderness Open 2020 Gallery">
                <img class="rounded-md shadow" src="./assets/images/wilderness/2.jpg"
                    alt="Wilderness Open 2020 Gallery">
                <img class="rounded-md shadow" src="./assets/images/wilderness/3.jpg"
                    alt="Wilderness Open 2020 Gallery">
            </div>
        </section>
        <!-- Gallery Section End -->



    </main>
    <!-- Main Body End -->

    <!-- CTA -->
    <?php include("./components/CTA.php") ?>

    <!-- Footer -->
    <?php include("./components/footer.php") ?>

    <!-- Js -->
    <?php include("./components/js.php") ?>
</body>

</html>