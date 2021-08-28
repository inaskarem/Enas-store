<x-dashboard-layout>

<div class="container">
        
        <form action="/dashboard/categories" method="post" enctype="multipart/form-data">
            @csrf

            @include('dashboard.categories._form')
            
        </form>

    </div>

</x-dashboard-layout>
