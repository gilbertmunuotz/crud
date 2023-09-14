 <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <a href="{{ route('offering.create', ['offering' => $offerings])}}">Add</a><br><br>
                <table class="display nowrap" style="width: 100%">
                    <thead>
                        <tr>
                            <td><b>S/NO</b></td>
                            <td><b>DATE</b></td>
                            <td><b>AMOUNT</b></td>
                            <td><b>CHAPEL</b></td>
                            <td><b>EDIT</b></td>
                            <td><b>DELETE</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($offerings as $offerings)

                        <tr>
                            <td>{{$offerings->id}}</td>
                            <td>{{$offerings->date}}</td>
                            <td>{{$offerings->amount}}</td>
                            <td>{{$offerings->chapel}}</td>
                            <td>
                                <a href="{{route('offering.edit', ['offering' => $offerings])}}">Edit</a>
                            </td>
                            <td>
                                <a href="{{route('offering.delete', ['offering' => $offerings])}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</section>