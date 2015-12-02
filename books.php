<?php
include_once "nav.php";
?>

<html>

<div class="container">
  <h4> Textbooks: Hard Copy or E-Book? </h4>
  <br />
  <h6> [Some Synopsis of the Section Here]</h6>
  <br />
  <div class="divider"> </div>
  <h5> Hard Copy Textbooks </h5>
  <br />
  <div class="content">
    <ul class="collapsible popout" data-collapsible="accordion">
      <li>
        <div class="collapsible-header"><i class="material-icons">filter_drama</i>Where to Buy?</div>
        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Average Costs</div>
        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i> Pros and Cons </div>
        <div class="collapsible-body"><p>Among all the ways to acquire textbooks, of course buying new books in bookstores is the most
          expensive one. In addition, online shopping is another good choice which is a little bit cheaper. Used books from other
          students are much cheaper, but they are pretty old and non-refundable. </p></div>
      </li>
    </ul>
  </div>
  <br />
  <div class="divider"> </div>
  <h5> E-Books </h5>
  <br />
  <div class="content">
    <ul class="collapsible popout" data-collapsible="accordion">
      <li>
        <div class="collapsible-header"><i class="material-icons">filter_drama</i>Where to Buy?</div>
        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Average Costs</div>
        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i>Pros and Cons</div>
        <div class="collapsible-body"><p>It is delivered instantly and you do not need to worry about quality, since it is not paper
          based. You can easily carry it with iPad or Kindle, but you may run out of battery if you keep reading for a long time. In
          addition, you can never sell it to others after you finished the course.</p></div>
      </li>
    </ul>
  </div>
  <br />
  <div class="divider"> </div>
  <div class="content">
    <table class ="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Pros</th>
              <th data-field="price">Cons</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Textbook</td>
            <td>Best Quality</td>
            <td>Expensive</td>
          </tr>
          <tr>
            <td>E-Book</td>
            <td>Good Quality & Cheaper</td>
            <td>Need to Wait</td>
          </tr>
          <tr>
            <td>Used Book</td>
            <td>Fair Quality</td>
            <td>Cheapest</td>
          </tr>
        </tbody>
      </table>
  </div>
</div>
<br />
</html>
