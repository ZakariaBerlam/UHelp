<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create Event Section</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <script src="..path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="..path/to/flowbite/dist/datepicker.js"></script>
    
    <nav class="w-full h-24 flex items-center border-b-4 border-yellow-new shadow-lg">
        <div class="logo-container absolute left-6">
            <a href="#">
                <img class="logo-pict w-44" src="/assets/logo.jpg" alt="UHelp Logo">
            </a>
        </div>
        <div class="features-container w-1/5 m-auto">
            <ul class="flex flex-row justify-around text-green-new text-2xl text-center">
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="#">Click and Sit</a>
                </li>
                <li class="hover:font-medium w-2/5 hover:underline drop-shadow">
                    <a href="#">Sharetificate</a>
                </li>
            </ul>
        </div>
        <div class="profile-container absolute right-8">
            <a href="#">
                <img class="logo-pict w-16 rounded-full" src="/assets/profil.jpg" alt="Profile Picture">
            </a>
        </div>
    </nav>

    <div class="form-title flex flex-col mt-20">
        <div class="m-auto text-4xl font-bold text-dark-blue-new mb-4">
            Create New Event
        </div>
        <div class="m-auto">
            <img src="/assets/Divider.png" alt="Divider">
        </div>
    </div>
    <div class="event-form w-5/12 mt-10 m-auto px-8 py-5 border-2 rounded-xl shadow-2xl">
        <div class="event-title flex flex-col">
            <label for="event_name" class="text-green-new text-2xl font-semibold mt-7 mb-4">Title *</label>
            <input type="text" id="event_name" class="border px-3 border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new" placeholder="Enter the event's name " required>
        </div>
        <div class="loc-and-date flex justify-between">
            <div class="event-location flex flex-col w-1/2">
                <label for="event_location" class="text-green-new text-2xl font-semibold mt-9 mb-4">Location *</label>
                <input type="text" id="event_location" class="border px-3 border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new" placeholder="Enter the event's location " required>
            </div>
            <div class="event-date flex flex-col">
                <label for="event_date" class="text-green-new text-2xl font-semibold mt-9 mb-4">Date *</label>
                <div class="relative">
                    <input datepicker type="text" id="event_date" class="border border-yellow-new rounded-lg text-lg focus:ring-green-new focus:border-green-new" placeholder="Select a date " required>
                    <div class="absolute right-0 inset-y-0 flex items-center pr-3">
                        <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="currentColor" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="certificate-template flex flex-col w-1/2">
            <label for="event_certificate" class="text-green-new text-2xl font-semibold mt-9 mb-4">Upload Certificate Template    *</label>
            <input type="file" id="event_certificate" class="text-lg rounded-lg text-gray-500 border" required>
        </div>
        <div class="flex justify-center">
            <button class="bg-yellow-new hover:bg-yellow-hover text-dark-blue-new text-xl font-bold px-8 py-3 rounded-full mt-14 mb-9 shadow-lg">
                Create Event
            </button>
        </div>
    </div>
</body>
</html>