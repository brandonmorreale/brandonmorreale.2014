<div id="boxes">
    <div id="dialog" class="window">
        <img src="img/contact.png" width="250" height="50" alt="Contact" style="margin-left:60px;"> <a href="#" class="close"><img src="img/x.png" width="25" height="25" alt="X"></a>
        <p>Whether you have a question, want to request a quote for a project, or just want to see some photos of my dog, I'd love to hear from you. Please leave a message below, and I will get back to you as soon as possible. </p>
        <form id="form" method="post" action="process.php">
          <p>Name<br>
            <input name="name" type="text" id="name" size="29">
          </p>
      <p>Email<br>
            <input name="email" type="text" id="email" size="29">
          <br />
      <p>Message<br>
            <textarea name="message" rows="6" cols="28"></textarea></p>
          <p>
          <input name="submit" type="submit" class="btn" value="Submit" />
          <input type="hidden" name="config" value="0" />
          </p>
        </form>
        </div>
    
</div>