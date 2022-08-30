<?php require'sidebar.php'; ?>

<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">



        <!--Main Content-->

 <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-18">
                <div class="row">
                    <div class="col-12">
                                        <div class="block-heading d-flex align-items-center title-pages">
                    <h5 class="text-truncate">New Workout</h5>
                </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-block mb-4">

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>


<div class="form-row">
  <div class="form-group col-md-12">
    <div class="block col-md-12" style="padding-bottom: 35px">

  <label class="control-label">Title</label>
   <input type="text" value="" placeholder="Title" name="workout_title" class="form-control" required="">

   <label class="control-label">Description</label>
   <textarea type="text" value="" placeholder="Description" maxlength="350" rows="4" id="description" class="form-control" name="workout_description" required=""></textarea>

   <label class="control-label">Goal</label>
   <select class="form-control" name="workout_goal" required="">
    <?php foreach($goals_lists as $goals_list): ?>
   <option value="<?php echo $goals_list['goal_id']; ?>"><?php echo $goals_list['goal_title']; ?></option>
    <?php endforeach; ?>
   </select>

   <label class="control-label">Level</label>
   <select class="form-control" name="workout_level" required="">
    <?php foreach($levels_lists as $levels_list): ?>
   <option value="<?php echo $levels_list['level_id']; ?>"><?php echo $levels_list['level_title']; ?></option>
    <?php endforeach; ?>
   </select>

   <label class="control-label">Duration</label>
   <input type="text" value="" name="workout_duration" class="form-control" required>

   <label class="control-label">Day 1</label>
   <input type="hidden" value="1" name="day_1">
   <select multiple="multiple" class="my-select form-control" name="exercise_id1[]">
    <?php foreach($exercises_lists1 as $exercises_list1): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list1['exercise_image']; ?>" value="<?php echo $exercises_list1['exercise_id']; ?>"><?php echo $exercises_list1['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 2</label>
      <input type="hidden" value="2" name="day_2">
   <select multiple="multiple" class="my-select form-control" name="exercise_id2[]">
    <?php foreach($exercises_lists2 as $exercises_list2): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list2['exercise_image']; ?>" value="<?php echo $exercises_list2['exercise_id']; ?>"><?php echo $exercises_list2['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 3</label>
     <input type="hidden" value="3" name="day_3">
   <select multiple="multiple" class="my-select form-control" name="exercise_id3[]">
    <?php foreach($exercises_lists3 as $exercises_list3): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list3['exercise_image']; ?>" value="<?php echo $exercises_list3['exercise_id']; ?>"><?php echo $exercises_list3['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 4</label>
     <input type="hidden" value="4" name="day_4">
   <select multiple="multiple" class="my-select form-control" name="exercise_id4[]">
    <?php foreach($exercises_lists4 as $exercises_list4): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list4['exercise_image']; ?>" value="<?php echo $exercises_list4['exercise_id']; ?>"><?php echo $exercises_list4['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 5</label>
     <input type="hidden" value="5" name="day_5">
   <select multiple="multiple" class="my-select form-control" name="exercise_id5[]">
    <?php foreach($exercises_lists5 as $exercises_list5): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list5['exercise_image']; ?>" value="<?php echo $exercises_list5['exercise_id']; ?>"><?php echo $exercises_list5['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 6</label>
     <input type="hidden" value="6" name="day_6">
   <select multiple="multiple" class="my-select form-control" name="exercise_id6[]">
    <?php foreach($exercises_lists6 as $exercises_list6): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list6['exercise_image']; ?>" value="<?php echo $exercises_list6['exercise_id']; ?>"><?php echo $exercises_list6['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 7</label>
     <input type="hidden" value="7" name="day_7">
   <select multiple="multiple" class="my-select form-control" name="exercise_id7[]">
    <?php foreach($exercises_lists7 as $exercises_list7): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list7['exercise_image']; ?>" value="<?php echo $exercises_list7['exercise_id']; ?>"><?php echo $exercises_list7['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 8</label>
     <input type="hidden" value="8" name="day_8">
   <select multiple="multiple" class="my-select form-control" name="exercise_id8[]">
    <?php foreach($exercises_lists8 as $exercises_list8): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list8['exercise_image']; ?>" value="<?php echo $exercises_list8['exercise_id']; ?>"><?php echo $exercises_list8['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 9</label>
     <input type="hidden" value="9" name="day_9">
   <select multiple="multiple" class="my-select form-control" name="exercise_id9[]">
    <?php foreach($exercises_lists9 as $exercises_list9): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list9['exercise_image']; ?>" value="<?php echo $exercises_list9['exercise_id']; ?>"><?php echo $exercises_list9['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

     <label class="control-label">Day 10</label>
     <input type="hidden" value="10" name="day_10">
   <select multiple="multiple" class="my-select form-control" name="exercise_id10[]">
    <?php foreach($exercises_lists10 as $exercises_list10): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list10['exercise_image']; ?>" value="<?php echo $exercises_list18['exercise_id']; ?>"><?php echo $exercises_list10['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 11</label>
     <input type="hidden" value="11" name="day_11">
   <select multiple="multiple" class="my-select form-control" name="exercise_id11[]">
    <?php foreach($exercises_lists11 as $exercises_list11): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list11['exercise_image']; ?>" value="<?php echo $exercises_list11['exercise_id']; ?>"><?php echo $exercises_list11['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 12</label>
     <input type="hidden" value="12" name="day_12">
   <select multiple="multiple" class="my-select form-control" name="exercise_id12[]">
    <?php foreach($exercises_lists12 as $exercises_list12): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list12['exercise_image']; ?>" value="<?php echo $exercises_list12['exercise_id']; ?>"><?php echo $exercises_list12['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 13</label>
     <input type="hidden" value="13" name="day_13">
   <select multiple="multiple" class="my-select form-control" name="exercise_id13[]">
    <?php foreach($exercises_lists13 as $exercises_list13): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list13['exercise_image']; ?>" value="<?php echo $exercises_list13['exercise_id']; ?>"><?php echo $exercises_list13['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 14</label>
     <input type="hidden" value="14" name="day_14">
   <select multiple="multiple" class="my-select form-control" name="exercise_id14[]">
    <?php foreach($exercises_lists14 as $exercises_list14): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list14['exercise_image']; ?>" value="<?php echo $exercises_list14['exercise_id']; ?>"><?php echo $exercises_list14['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 15</label>
     <input type="hidden" value="15" name="day_15">
   <select multiple="multiple" class="my-select form-control" name="exercise_id15[]">
    <?php foreach($exercises_lists15 as $exercises_list15): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list15['exercise_image']; ?>" value="<?php echo $exercises_list15['exercise_id']; ?>"><?php echo $exercises_list15['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 16</label>
     <input type="hidden" value="16" name="day_16">
   <select multiple="multiple" class="my-select form-control" name="exercise_id16[]">
    <?php foreach($exercises_lists16 as $exercises_list16): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list16['exercise_image']; ?>" value="<?php echo $exercises_list16['exercise_id']; ?>"><?php echo $exercises_list16['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 17</label>
     <input type="hidden" value="17" name="day_17">
   <select multiple="multiple" class="my-select form-control" name="exercise_id17[]">
    <?php foreach($exercises_lists17 as $exercises_list17): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list17['exercise_image']; ?>" value="<?php echo $exercises_list17['exercise_id']; ?>"><?php echo $exercises_list17['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 18</label>
     <input type="hidden" value="18" name="day_18">
   <select multiple="multiple" class="my-select form-control" name="exercise_id18[]">
    <?php foreach($exercises_lists18 as $exercises_list18): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list18['exercise_image']; ?>" value="<?php echo $exercises_list18['exercise_id']; ?>"><?php echo $exercises_list18['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 19</label>
     <input type="hidden" value="19" name="day_19">
   <select multiple="multiple" class="my-select form-control" name="exercise_id19[]">
    <?php foreach($exercises_lists19 as $exercises_list19): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list19['exercise_image']; ?>" value="<?php echo $exercises_list19['exercise_id']; ?>"><?php echo $exercises_list19['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 20</label>
     <input type="hidden" value="20" name="day_20">
   <select multiple="multiple" class="my-select form-control" name="exercise_id20[]">
    <?php foreach($exercises_lists20 as $exercises_list20): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list20['exercise_image']; ?>" value="<?php echo $exercises_list20['exercise_id']; ?>"><?php echo $exercises_list20['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 21</label>
     <input type="hidden" value="21" name="day_21">
   <select multiple="multiple" class="my-select form-control" name="exercise_id21[]">
    <?php foreach($exercises_lists21 as $exercises_list21): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list21['exercise_image']; ?>" value="<?php echo $exercises_list21['exercise_id']; ?>"><?php echo $exercises_list21['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 22</label>
     <input type="hidden" value="22" name="day_22">
   <select multiple="multiple" class="my-select form-control" name="exercise_id22[]">
    <?php foreach($exercises_lists22 as $exercises_list22): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list22['exercise_image']; ?>" value="<?php echo $exercises_list22['exercise_id']; ?>"><?php echo $exercises_list22['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 23</label>
     <input type="hidden" value="23" name="day_23">
   <select multiple="multiple" class="my-select form-control" name="exercise_id23[]">
    <?php foreach($exercises_lists23 as $exercises_list23): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list23['exercise_image']; ?>" value="<?php echo $exercises_list23['exercise_id']; ?>"><?php echo $exercises_list23['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 24</label>
     <input type="hidden" value="24" name="day_24">
   <select multiple="multiple" class="my-select form-control" name="exercise_id24[]">
    <?php foreach($exercises_lists24 as $exercises_list24): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list24['exercise_image']; ?>" value="<?php echo $exercises_list24['exercise_id']; ?>"><?php echo $exercises_list24['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 25</label>
     <input type="hidden" value="25" name="day_25">
   <select multiple="multiple" class="my-select form-control" name="exercise_id25[]">
    <?php foreach($exercises_lists25 as $exercises_list25): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list25['exercise_image']; ?>" value="<?php echo $exercises_list25['exercise_id']; ?>"><?php echo $exercises_list25['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 26</label>
     <input type="hidden" value="26" name="day_26">
   <select multiple="multiple" class="my-select form-control" name="exercise_id26[]">
    <?php foreach($exercises_lists26 as $exercises_list26): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list26['exercise_image']; ?>" value="<?php echo $exercises_list26['exercise_id']; ?>"><?php echo $exercises_list26['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 27</label>
     <input type="hidden" value="27" name="day_27">
   <select multiple="multiple" class="my-select form-control" name="exercise_id27[]">
    <?php foreach($exercises_lists27 as $exercises_list27): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list27['exercise_image']; ?>" value="<?php echo $exercises_list27['exercise_id']; ?>"><?php echo $exercises_list27['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 28</label>
     <input type="hidden" value="28" name="day_28">
   <select multiple="multiple" class="my-select form-control" name="exercise_id28[]">
    <?php foreach($exercises_lists28 as $exercises_list28): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list28['exercise_image']; ?>" value="<?php echo $exercises_list28['exercise_id']; ?>"><?php echo $exercises_list28['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 29</label>
     <input type="hidden" value="29" name="day_29">
   <select multiple="multiple" class="my-select form-control" name="exercise_id29[]">
    <?php foreach($exercises_lists29 as $exercises_list29): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list29['exercise_image']; ?>" value="<?php echo $exercises_list29['exercise_id']; ?>"><?php echo $exercises_list29['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>

      <label class="control-label">Day 30</label>
     <input type="hidden" value="30" name="day_30">
   <select multiple="multiple" class="my-select form-control" name="exercise_id30[]">
    <?php foreach($exercises_lists30 as $exercises_list30): ?>
   <option data-img-src="<?php echo SITE_URL ?>/images/<?php echo $exercises_list30['exercise_image']; ?>" value="<?php echo $exercises_list30['exercise_id']; ?>"><?php echo $exercises_list30['exercise_title']; ?></option>
    <?php endforeach; ?>
   </select>



   <label class="control-label">Status</label>


<table>
  <tr>
    <td>                             <div class="radio radio-success">
                                <input type="radio" name="workout_status" id="radio5" value="1">
                                <label for="radio5">
                                    Publish
                                </label>
                            </div></td>
                            <td>
                                                          <div class="radio radio-danger">
                                <input type="radio" name="workout_status" id="radio6" value="0">
                                <label for="radio6">
                                    Draft
                                </label>
                            </div>
                            </td>
  </tr>

</table>

   <label class="control-label">Image</label>

<div class="new-image" id="image-preview">
  <label for="image-upload" id="image-label">Choose File</label>
  <input type="file" name="workout_image" id="image-upload" required="" />
</div>

<span class="text-danger recomendedsize">Recommended size: <b>650 x 350</b> </span>
<br/>
<br/>

   <div class="action-button">
   <input type="submit" name="save" value="Upload" class="btn btn-embossed btn-primary">
   <input type="reset" name="reset" value="Reset" class="btn btn-embossed btn-danger">
   </div>

</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
