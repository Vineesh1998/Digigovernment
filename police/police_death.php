<?php 
  include 'police_header.php';
  $id = $_SESSION['id'];
 ?>
<?php
    $sql = "select * from death where police = '$id' and pol_status = 0";
    $do = mysqli_query($conn,$sql);
?>
<div class="span8">
            <article>
              <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">Kulathupuzha Police</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <article class=".police_new_cases">
                <div class="accordion" id="accordion2">
                  <?php
                    $i=0;
                    while($fe = mysqli_fetch_array($do)){
                      $i++;
                      $num = $fe['id'];
                      $ud = $fe['dead_id'];
                      $sql2 = "select * from user where civil_id ='$ud'";
                      $next = mysqli_query($conn,$sql2);
                      $details = mysqli_fetch_array($next);
                      $name = $details['name'];
                      $age = $details['age'];
                      $cau = $fe['cause'];
                      $date = $fe['date'];
                      $time = $fe['time'];
                      $doc_status = $fe['doc_status'];
                      $re = $fe['relative_id'];
                      $rel_status = $fe['rel_status'];
                      $doc_id = $fe['doc_id'];
                      $sql3 = "select name,hospital from doctor where doc_id = '$doc_id'";
                      $get_doc = mysqli_query($conn,$sql3);
                      $get = mysqli_fetch_array($get_doc);
                      $doc_name = $get['name'];
                      $doc_hos = $get['hospital'];
                    ?>
                  <form method="post" action="death_action.php">
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $i?>">
                <i class="icon-minus"></i> Death of <?php echo $name ?> </a>
                    </div>
                    <div id="collapse<?php echo $i?>" class="accordion-body collapse in">
                      <div class="accordion-inner">
                        <div class="row">
                          <div class="police_span" style="width: 50%;">
                            <table>
                              <tr>
                                <td style="padding: 10px;">Name</td>
                                <td style="padding: 10px;">:</td>
                                <td style="padding: 10px;"><?php echo $name ?> </td>
                              </tr>
                              <tr>
                                <td style="padding: 10px;">Civil ID</td>
                                <td style="padding: 10px;">:</td>
                                <td style="padding: 10px;"><?php echo $ud ?></td>
                              </tr>
                              <tr>
                                <td style="padding: 10px;">Date of Death</td>
                                <td style="padding: 10px;">:</td>
                                <td style="padding: 10px;"><?php echo $date ?></td>
                              </tr>
                            </table>
                          </div>
                          <div class="police_span">
                            <table>
                              <tr>
                                <td style="padding: 10px;">Age</td>
                                <td style="padding: 10px;">:</td>
                                <td style="padding: 10px;"><?php echo $age ?></td>
                              </tr>
                              <tr>
                                <td style="padding: 10px;">Cause of Death</td>
                                <td style="padding: 10px;">:</td>
                                <td style="padding: 10px;"><?php echo $cau ?></td>
                              </tr>
                              <tr>
                                <td style="padding: 10px;">Time of Death</td>
                                <td style="padding: 10px;">:</td>
                                <td style="padding: 10px;"><?php echo $time ?></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <div class="police_heading">
                          <h6><u>Verification details</u></h6>
                        </div>
                        <div class="police_sub_part">
                          <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                 <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseSubTwo<?php echo $i?>">
                                  <i class="icon-plus"></i> #1 From Doctor </a>
                                </div>
                              <div id="collapseSubTwo<?php echo $i?>" class="accordion-body collapse">
                                <div class="accordion-inner">
                                  <div class="row">
                                    <div class="police_span" style="width: 50%;">
                                      <table>
                                        <tr>
                                          <td style="padding: 10px;">Reported Doctor</td>
                                          <td style="padding: 10px;">:</td>
                                          <td style="padding: 10px;"><?php echo $doc_name ?></td>
                                        </tr>
                                        <tr>
                                          <td style="padding: 10px;">Civil ID</td>
                                          <td style="padding: 10px;">:</td>
                                          <td style="padding: 10px;"><?php echo $doc_id ?></td>
                                        </tr>
                                        <tr>
                                          <td style="padding: 10px;">Working Hospital</td>
                                          <td style="padding: 10px;">:</td>
                                          <td style="padding: 10px;"><?php echo $doc_hos ?></td>
                                        </tr>
                                      </table>
                                    </div>
                                    <div class="police_span police_text_confirm">
                                      Status : 
                                      <?php
                                        if($doc_status==1){
                                          ?>
                                          <i style="color: green;">Confirmed</i>
                                          <?php
                                        }
                                      ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-group">
                                <div class="accordion-heading">
                                 <a class="accordion-toggle" data-toggle="collapse" data-parent="" href="#collapseSubThree<?php echo $i?>">
                                  <i class="icon-plus"></i> #2 From Relative or Family</a>
                                </div>
                              <div id="collapseSubThree<?php echo $i?>" class="accordion-body collapse">
                                <div class="accordion-inner">
                                  <div class="row">
                                    <?php
                                      $sql4 = "select name from user where civil_id='$re'";
                                      $re_query = mysqli_query($conn,$sql4);
                                      $re_array = mysqli_fetch_array($re_query);
                                      $re_name = $re_array['name']; 
                                    ?>
                                    <div class="police_span" style="width: 50%;">
                                      <table>
                                        <tr>
                                          <td style="padding: 10px;">Person Recieving Certificate</td>
                                          <td style="padding: 10px;">:</td>
                                          <td style="padding: 10px;"><?php echo "Family Member" ?></td>
                                        </tr>
                                        <tr>
                                          <td style="padding: 10px;">Name</td>
                                          <td style="padding: 10px;">:</td>
                                          <td style="padding: 10px;"><?php echo $re_name ?></td>
                                        </tr>
                                        <tr>
                                          <td style="padding: 10px;">Civil Id </td>
                                          <td style="padding: 10px;">:</td>
                                          <td style="padding: 10px;"><?php echo $re ?></td>
                                        </tr>
                                      </table>
                                    </div>
                                    <div class="police_span police_text_confirm">
                                      Status : 
                                      <?php
                                        if($rel_status==1){
                                          ?>
                                          <i style="color: green;">Confirmed</i>
                                          <?php
                                        }
                                        elseif($rel_status==0){
                                          ?>
                                          <i style="color: Orange;">Pending</i>
                                          <?php
                                        }
                                      ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <center>
                          <a href="death_action_reject.php?id=<?php echo $num ?>"><button type="button" name="cancel" class="btn btn-medium btn-danger">Report or Halt process</button></a>
                          <?php
                          if($rel_status==1&&$doc_status==1){
                            ?>
                              <a href="death_action_approval.php?id=<?php echo $num ?>"><button type="button" name="success" class="btn btn-medium btn-success">Confirm as verified</button></a>
                            <?php
                          }
                          else{
                            ?>
                              <button type="button" name="success" class="btn btn-medium btn-success" disabled>Confirm as verified</button>
                            <?php
                          }
                          ?>
                          
                        </center>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <?php
                          
                    }
                  ?>
                </div>
              </form>
            </article>
<?php include 'police_footer.php'; ?>