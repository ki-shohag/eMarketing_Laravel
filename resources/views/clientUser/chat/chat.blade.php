@include('clientUser.header')

<main id="main">

  <section>
    <div class="row justify-content-center mt-3">
      <div class="col col-xl-8">
        <div class="row justify-content-around">
          <div class="col-12 col-xl-3 bg-secondary text-white rounded"><br>
            <input type="text" id="searchBox" class="form-control bg-transparent text-white border border-light" placeholder="Search clients..."><br>
            <div id="clientSearchBox">
            </div>
            <div id="clientBox">
              @foreach($managers as $manager)
              <a href="/chat/{{ $manager->id}}" class="btn btn-primary btn-block btn-sm text-left border border-light">{{$manager->full_name}}</a><br>
              @endforeach
            </div>
          </div>
          <div class="col-12 col-xl-8 border rounded border-info pt-2">
            <div class="bg-primary rounded text-white pt-3 text-right pr-4">
              <label id="clientNameLabel" value="1" for="">{{$manager_name}}</label>
            </div><br>
            <div id="msgBoxSection">
              @foreach($chats as $chat)
              @if($chat['sent_from']=='Client')
              <br><span for="" class="bg-info text-dark btn-block text-right p-1 rounded float-right">{{$chat['body']}}</span><br>
              @endif
              @if($chat['sent_from']=='Manager')
              <br><span for="" class="bg-info p-1 text-light btn-block rounded text-left">{{$chat['body']}}</span><br>
              @endif
              @endforeach
            </div>
            <br><br><textarea id="textMsg" class="form-control border border-info rounded mb-2" name="" id="" cols="90" rows="2" placeholder="Send Message..."></textarea>
            <button id="sendMsgBtn" class="btn btn-info btn-block">Send</button><br>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@include('clientUser.footer')