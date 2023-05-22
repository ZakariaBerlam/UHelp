@foreach ($events as $event)
        <a href="#">
            <div class="relative h-[11.667vw] flex flex-row rounded-[1.25vw] bg-white shadow-2xl hover:scale-[1.02] transition duration-100 ease-in-out">
                <img class="w-5/12 rounded-[1.25vw]" src="/assets/sharetificate/seminar_img_list.jpeg" alt="Seminar Image">
                <div class="flex flex-col p-[1.250vw] gap-y-[0.625vw]">
                    <h5 class="font-bold text-dark-blue-new text-[1.25vw]">{{$event->title}}</h5>
                    <p class="font-semibold text-green-new text-[1.042vw]">{{$event->date->format('d F Y')}}</p>
                </div>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                    <svg class="absolute right-[1.250vw] bottom-[1.250vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
                </button>
            </div>
        </a>
@endforeach
