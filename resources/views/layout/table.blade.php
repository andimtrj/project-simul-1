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
            <a href="{{ route('versionpageAdmin', $doc->file_id) }}" class="a-icon" style="text-decoration: none; margin-right:10px;">
              <img src="../assets/View.png" alt="View" class="action-button">
            </a>
            <a href="{{ route('updatepage', $doc->file_id) }}" class="a-icon" style="text-decoration: none; margin-right:10px;">
              <img src="../assets/Update.png" alt="Update" class="action-button" style="height: 28px; width: auto;">
            </a>
            <a data-bs-toggle="modal" data-bs-target="#updateModal{{ $doc->file_id }}" class="a-icon" style="text-decoration: none">
              <img src="../assets/Delete.png" alt="Delete" class="action-button">
            </a>
          </td>
        </tr>

        <!-- Delete Pop Up -->
        <div class="modal fade" id="updateModal{{ $doc->file_id }}" tabindex="-1" aria-labelledby="updateModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content popup-delete">
              <div class="modal-body text-center">
                <div class="modal-title mb-3">Are you sure you want </br> to delete {{ $doc->title }}?</div>
                <a href="#"
                  onclick="event.preventDefault(); document.getElementById('deleteForm_{{ $doc->file_id }}').submit();">
                  <button class="btn btn-danger">Delete</button>
                </a>
                <!-- Delete Form -->
                <form action="{{ route('delete', $doc->file_id) }}" method="POST" id="deleteForm_{{ $doc->file_id }}"
                  style="display: none;">
                  @csrf
                  @method('delete')
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </tbody>
  </table>
  <a href ="{{ route('uploadpage') }}" class="img-8"><img loading="lazy" src="/assets/Button.png"
      style="height:90px; width:auto;" /></a>
</div>

<style>
  .a-icon img{
    transition: transform 0.3s ease;
  }

  .a-icon:hover img{
    transform: scale(1.5);
  }
</style>