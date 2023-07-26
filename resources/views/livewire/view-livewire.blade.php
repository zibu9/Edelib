<div>
    <div class="row justify-content-center">
        <div class="col-md-8" wire:ignore>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Cours</th>
                    <th scope="col">Ponderation</th>
                    <th scope="col">Professeur</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($courses as $cours)
                  <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $cours->course }}</td>
                    <td>{{ $cours->ponderation }}</td>
                    <td>{{ $professors->getProfessor($cours->professor_id) }}</td>
                  </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
