@include('clientUser.header')

<main id="main">
  <section>
    <div class="row justify-content-center mt-3">
      <div class="col col-xl-8">
        <div class="row mt-4 justify-content-around">
          <div class="col-4 manager-dashboard-boxes text-center pt-5">
            <h6 class="mb-3">Affiliated Companies</h6>
            <button class="btn btn-link border-light mb-5">
              <a class="text-center text-light text-decoration-none" href="{{route('company.index')}}">Manage Companies</a>
            </button>
          </div>
          <div class="col-4 manager-dashboard-boxes text-center pt-5" style="background: #5f9f9f">
            <h6 class="mb-3">Proposal List</h6>
            <button class="btn btn-link border-light mb-5">
              <a class="text-center text-light text-decoration-none" href="{{route('proposal.index')}}">Manage Proposals</a>
            </button>
          </div>
          <div class="col-4 manager-dashboard-boxes text-center pt-5" style="background: #7a67ee">
            <h6 class="mb-3">Service History</h6>
            <button class="btn btn-link border-light mb-5">
              <a class="text-center text-light text-decoration-none" href="{{route('service.index')}}">View History</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@include('clientUser.footer')