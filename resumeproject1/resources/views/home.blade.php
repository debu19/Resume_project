<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{asset('images/pic1.jpg')}}" alt="" class="img-thumbnail" width="250px" height="150px">
            </div>
            <div class="mt-5 text-white mx=5 text-justify">
                <h1 class="fw-bold st-font">Hello,</h1>
                <div class="px-4">
                    <p style="text-indent:100px;">I am <b class="text-warning">Debarghya Banerjee</b> having 5 years of
                        full-stack web development experience for global businesses, I offer the technical expertisse
                        you are seeking for your web developer position.</p>
                    <p>Since earning my bachelor's degree in internet and web developmengt from VIT Chennai University,
                        I have served as a web developer at <b class="text-warning">Mahindra First Choice</b>, one of
                        biggest car & bike platform. In this position I have worked as a backend developer working with
                        Laravel, PHP, MySQL.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-info">Contact</a>
            </div>
        </div>
    </x-slot>
</x-layout>