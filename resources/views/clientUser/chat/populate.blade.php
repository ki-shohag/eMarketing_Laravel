<div class="container">
  <div class="messaging">
    <div class="inbox_msg">
      <div class="inbox_people">
        <div class="headind_srch">
          <div class="recent_heading">
            <h4>Recent</h4>
          </div>
          <div class="srch_bar">
            <div class="stylish-input-group">
              <input type="text" class="search-bar" placeholder="Search" />
              <span class="input-group-addon">
                <button type="button">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </span>
            </div>
          </div>
        </div>

        <div class="inbox_chat">
          <% messages.name.forEach( function(std){ %>
          <div class="chat_list">
            <div class="chat_people">
              <div class="chat_img">
                <img src="<%=std.image%>" alt="sunil" />
              </div>
              <div class="chat_ib">
                <h5>
                  <%=std.name%>
                  <span class="chat_date"
                    ><%=std.messages[std.messages.length-1].date%></span
                  >
                </h5>
                <p><%=std.messages[std.messages.length-1].message_text%></p>
              </div>
            </div>
          </div>
          <% }) %>
        </div>
      </div>

      <div class="mesgs" id="loaddiv">
        <div class="msg_history">
          <% messages.name[0].messages.forEach(function (msg){ %> <%
          if(msg.sender!=name){ %>
          <div class="incoming_msg">
            <div class="incoming_msg_img">
              <img
                src="https://ptetutorials.com/images/user-profile.png"
                alt="sunil"
              />
            </div>
            <div class="received_msg">
              <div class="received_withd_msg">
                <p><%=msg.message_text%></p>
                <span class="time_date"> <%=msg.date%></span>
              </div>
            </div>
          </div>
          <%}else{%>
          <div class="outgoing_msg">
            <div class="sent_msg">
              <p><%=msg.message_text%></p>
              <span class="time_date"><%=msg.date%></span>
            </div>
          </div>
          <%}})%>
        </div>

        <div class="type_msg">
          <div class="input_msg_write">
            <input
              type="text"
              class="write_msg"
              placeholder="Type a message"
              id="text1"
            />
            <button class="msg_send_btn" type="button" id="btn1">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
