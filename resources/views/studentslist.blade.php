
<div class="card mb-3">
    <img src= "https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-teachers-day-classroom-background-illustration-backgroundteachers-dayclassroom-background-image_54104.jpg" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-info">Show</a>

                         <a href="" class="btn btn-sm btn-danger">delete</a>



                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

































