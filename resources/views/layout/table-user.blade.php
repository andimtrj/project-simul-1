<div class="div-24">
  <table class="table table-hover transparent-table text-center">
    <thead class="table table-danger">
      <tr>
        <th scope="col">Doc. Title</th>
        <th scope="col">Description</th>
        <th scope="col">Timestamp</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($docs as $doc)
        <tr>
          <td class="max-title">{{ $doc->title }}</td>
          <td class="max-desc">{{ $doc->description }}</td>
          <td>{{ $doc->updated_at }}</td>
          <td>
            <a href="{{ route('versionpage', $doc->file_id) }}">
              <img src="../assets/View.png" alt="View" class="action-button">
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>