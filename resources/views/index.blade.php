@extends('master')

@section('content')
<div class = "container">
    <div class = "row">
        <div class ="col-md-3"></div>
        <div class = "col-md-6 text-center text-uppercase">
            <h1 class = "title-super text-uppercase text-thin" >Jellibeans</h1>
            <h4>Search</h4>
        </div>
        <div class = "col-md-3 text-center text-uppercase">
            <img data-toggle ="modal" data-target ="#jbean" class="img-responsive surprise" id = "firstSuperSmall">
            <img data-toggle ="modal" data-target ="#jbean" class="img-responsive surprise" id = "secondSuperSmall">
             <img data-toggle ="modal" data-target ="#jbean" class="img-responsive surprise" id = "thirdSuperSmall">
            <img data-toggle ="modal" data-target ="#jbean" class="img-responsive surprise" id = "fourthSuperSmall">
        </div>
    </div>
</div>

<hr>

<div class = "container text-center img-responsive">

<div class = "row text-center">

  <div class = "col-md-12 text-center">

<table width= "765px" cellspacing="0" cellpadding="0" style="border-spacing:0;" id="QMSTable" align = "center">
    <col width="25px"/>
    <col width="760px"/>
    <col width="260px"/>
    <tr>
        <td class="divCenMid " colspan = "4">Autism Assessment
        <br>Please read each statement very carefully and rate how strongly you agree or disagree by selecting the appropriate number beside each question.
        </td>
    </tr>
    <tr>
        <td class="allbdrCenMid"> No</td>
        <td class="allbdrLtMid"> Question</td>
        <td class="allbdrCenMid">Enter '0' if you 'Disagree.<br>Enter '1' if you Agree.</td>
    </tr>
    <tr>
        <td class="allbdrCenTop"> Q1</td>
        <td class="allbdrLtTop">  I prefer to do things on my own rather than with others.</td>
        <td class="allbdrCenMid">
            <input id="Q1CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q1CALC"/>
        </td>
    </tr>
    <tr>
        <td class="allbdrCenTop"> Q2</td>
        <td class="allbdrLtTop"> I prefer to do things the same way over and over again.</td>
        <td class="allbdrCenMid">
            <input id="Q2CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q2CALC"/>
        </td>
    </tr>
    <tr>
        <td class="allbdrCenTop"> Q3</td>
        <td class="allbdrLtTop"> If I try to imagine something, I find it very difficult to create a picture in my mind.</td>
        <td class="allbdrCenMid">
            <input id="Q3CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q3CALC"/>
        </td>
    </tr>
    <tr>
        <td class="allbdrCenTop"> Q4</td>
        <td class="allbdrLtTop"> I frequently get so strongly absorbed in one thing that I lose sight of other things.</td>
        <td class="allbdrCenMid">
            <input id="Q4CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q4CALC"/>
        </td>
    </tr>
  <tr>
        <td class="allbdrCenTop"> Q5</td>
        <td class="allbdrLtTop"> I often notice small sounds when others do not.</td>
        <td class="allbdrCenMid">
            <input id="Q5CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q5CALC"/>
        </td>
    </tr>
  <tr>
      <td class="allbdrCenTop"> Q6</td>
      <td class="allbdrLtTop"> I usually notice car number plates or similar strings of information.</td>
      <td class="allbdrCenMid">
          <input id="Q6CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q6CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q7</td>
      <td class="allbdrLtTop"> Other people frequently tell me that what I’ve said is impolite, even though I think it is polite.</td>
      <td class="allbdrCenMid">
          <input id="Q7CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q7CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q8</td>
      <td class="allbdrLtTop"> When I'm reading a story, I can find it hard to imagine what the characters might look like.</td>
      <td class="allbdrCenMid">
          <input id="Q8CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q8CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q9</td>
      <td class="allbdrLtTop"> I am fascinated by dates.</td>
      <td class="allbdrCenMid">
          <input id="Q9CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q9CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q10</td>
      <td class="allbdrLtTop"> In a social group, I cant easily keep track of several different people’s conversations.</td>
      <td class="allbdrCenMid">
          <input id="Q10CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q10CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q11</td>
      <td class="allbdrLtTop"> I find social situations difficult.</td>
      <td class="allbdrCenMid">
          <input id="Q11CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q11CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q12</td>
      <td class="allbdrLtTop"> I tend to notice details that others do not.</td>
      <td class="allbdrCenMid">
          <input id="Q12CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q12CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q13</td>
      <td class="allbdrLtTop"> I would rather go to a library than a party.</td>
      <td class="allbdrCenMid">
          <input id="Q13CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q13CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q14</td>
      <td class="allbdrLtTop"> I find making up stories difficult.</td>
      <td class="allbdrCenMid">
          <input id="Q14CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q14CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q15</td>
      <td class="allbdrLtTop"> I find myself drawn more strongly to things than to people.</td>
      <td class="allbdrCenMid">
          <input id="Q15CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q15CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q16</td>
      <td class="allbdrLtTop"> I tend to have very strong interests which I get upset about if I can’t pursue.</td>
      <td class="allbdrCenMid">
          <input id="Q16CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q16CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q17</td>
      <td class="allbdrLtTop"> I don't 'enjoy social chit-chat.</td>
      <td class="allbdrCenMid">
          <input id="Q17CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q17CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q18</td>
      <td class="allbdrLtTop"> When I talk, it isn’t always easy for others to get a word in edgeways.</td>
      <td class="allbdrCenMid">
          <input id="Q18CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q18CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q19</td>
      <td class="allbdrLtTop"> I am fascinated by numbers.</td>
      <td class="allbdrCenMid">
          <input id="Q19CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q19CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q20</td>
      <td class="allbdrLtTop"> When I’m reading a story, I find it difficult to work out the characters’ intentions.</td>
      <td class="allbdrCenMid">
          <input id="Q20CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q20CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q21</td>
      <td class="allbdrLtTop"> I don’t particularly enjoy reading fiction.</td>
      <td class="allbdrCenMid">
          <input id="Q21CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q21CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q22</td>
      <td class="allbdrLtTop"> I find it hard to make new friends.</td>
      <td class="allbdrCenMid">
          <input id="Q22CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q22CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q23</td>
      <td class="allbdrLtTop"> I notice patterns in things all the time.</td>
      <td class="allbdrCenMid">
          <input id="Q23CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q23CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q24</td>
      <td class="allbdrLtTop"> I would rather go to a museum than to the theatre.</td>
      <td class="allbdrCenMid">
          <input id="Q24CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q24CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q25</td>
      <td class="allbdrLtTop"> It upsets me if my daily routine is disturbed.</td>
      <td class="allbdrCenMid">
          <input id="Q25CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q25CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q26</td>
      <td class="allbdrLtTop"> I frequently find that I don’t know how to keep a conversation going.</td>
      <td class="allbdrCenMid">
          <input id="Q26CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q26CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q27</td>
      <td class="allbdrLtTop"> I find it hard to “read between the lines” when someone is talking to me.</td>
      <td class="allbdrCenMid">
          <input id="Q27CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q27CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q28</td>
      <td class="allbdrLtTop"> I usually concentrate more on the small details than on the whole picture.</td>
      <td class="allbdrCenMid">
          <input id="Q28CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q28CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q29</td>
      <td class="allbdrLtTop"> I am very good at remembering phone numbers.</td>
      <td class="allbdrCenMid">
          <input id="Q29CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q29CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q30</td>
      <td class="allbdrLtTop"> I usually notice small changes in a situation, or a person’s appearance.</td>
      <td class="allbdrCenMid">
          <input id="Q30CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q30CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q31</td>
      <td class="allbdrLtTop"> I don't know how to tell if someone listening to me is getting bored.</td>
      <td class="allbdrCenMid">
          <input id="Q31CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q31CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q32</td>
      <td class="allbdrLtTop"> I find it hard to do more than one thing at once.</td>
      <td class="allbdrCenMid">
          <input id="Q32CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q32CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q33</td>
      <td class="allbdrLtTop"> When I talk on the phone, I’m not sure when it’s my turn to speak.</td>
      <td class="allbdrCenMid">
          <input id="Q33CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q33CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q34</td>
      <td class="allbdrLtTop"> I don't 'enjoy doing things spontaneously.</td>
      <td class="allbdrCenMid">
          <input id="Q34CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q34CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q35</td>
      <td class="allbdrLtTop"> I am often the last to understand the point of a joke.</td>
      <td class="allbdrCenMid">
          <input id="Q35CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q35CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q36</td>
      <td class="allbdrLtTop"> I find it hard to work out what someone is thinking or feeling just by looking at their face.</td>
      <td class="allbdrCenMid">
          <input id="Q36CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q36CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q37</td>
      <td class="allbdrLtTop"> If there is an interruption, I can't easily' switch back to what I was doing. </td>
      <td class="allbdrCenMid">
          <input id="Q37CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q37CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q38</td>
      <td class="allbdrLtTop"> I am bad at social chit-chat.</td>
      <td class="allbdrCenMid">
          <input id="Q38CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q38CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q39</td>
      <td class="allbdrLtTop"> People often tell me that I keep going on and on about the same thing.</td>
      <td class="allbdrCenMid">
          <input id="Q39CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q39CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q40</td>
      <td class="allbdrLtTop"> When I was young, I did not enjoy playing games which involving pretending with other children.</td>
      <td class="allbdrCenMid">
          <input id="Q40CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q40CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q41</td>
      <td class="allbdrLtTop"> I like to collect information about categories of things (e.g. types of car, types of bird, types of train, types of plant, etc.).</td>
      <td class="allbdrCenMid">
          <input id="Q41CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q1CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q42</td>
      <td class="allbdrLtTop"> I find it difficult to imagine what it would be like to be someone else.</td>
      <td class="allbdrCenMid">
          <input id="Q42CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q42CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q43</td>
      <td class="allbdrLtTop"> I like to plan any activities I participate in carefully.</td>
      <td class="allbdrCenMid">
          <input id="Q43CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q43CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q44</td>
      <td class="allbdrLtTop"> I don't 'enjoy social occasions.</td>
      <td class="allbdrCenMid">
          <input id="Q44CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q44CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q45</td>
      <td class="allbdrLtTop"> I find it difficult to work out people’s intentions.</td>
      <td class="allbdrCenMid">
          <input id="Q45CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q45CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q46</td>
      <td class="allbdrLtTop"> New situations make me anxious.</td>
      <td class="allbdrCenMid">
          <input id="Q46CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q46CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q47</td>
      <td class="allbdrLtTop"> I don't 'enjoy meeting new people.</td>
      <td class="allbdrCenMid">
          <input id="Q47CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q47CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q48</td>
      <td class="allbdrLtTop"> I am not a good diplomat.</td>
      <td class="allbdrCenMid">
          <input id="Q48CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q48CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q49</td>
      <td class="allbdrLtTop"> I am not very good at remembering people’s date of birth.</td>
      <td class="allbdrCenMid">
          <input id="Q49CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q49CALC"/>
      </td>
  </tr>
  <tr>
      <td class="allbdrCenTop"> Q50</td>
      <td class="allbdrLtTop"> I find it very hard to play games with children that involve pretending.</td>
      <td class="allbdrCenMid">
          <input id="Q50CALC" type="text" value="" class="nobdrCenMid" style="overflow:hidden; width:93% " name="Q50CALC"/>
      </td>
  </tr>
</table>

<div id="hidTable" style="display: none" >
    <table id="testTable" >
        <caption>Autism Quotient Scores</caption>
        <colgroup></colgroup>
        <colgroup></colgroup>
        <colgroup></colgroup>
        <thead>
        <tr>
            <th>No.</th>
            <th>Question</th>
            <th>Score (1 = agree, 0 = disagree)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Q1</td>
            <td>I prefer to do things on my own rather than with others.</td>
            <td id="htqf1">-</td>
        </tr>
        <tr>
            <td>Q2</td>
            <td>I prefer to do things the same way over and over again.</td>
            <td id="htqf2">-</td>
        </tr>
        <tr>
            <td>Q3</td>
            <td>If I try to imagine something, I find it very difficult to create a picture in my mind.</td>
            <td id="htqf3">-</td>
        </tr>
        <tr>
            <td>Q4</td>
            <td>I frequently get so strongly absorbed in one thing that I lose sight of other things.</td>
            <td id="htqf4">-</td>
        </tr>
        <tr>
            <td>Q5</td>
            <td>I often notice small sounds when others do not.</td>
            <td id="htqf5">-</td> 
        </tr>
        <tr>
            <td>Q6</td>
            <td>I usually notice car number plates or similar strings of information.</td>
            <td id="htqf6">-</td>
        </tr>
        <tr>
            <td>Q7</td>
            <td>Other people frequently tell me that what I have said is impolite, even though I think it is polite.</td>
            <td id="htqf7">-</td>
        </tr>
        <tr>
            <td>Q8</td>
            <td>When I am reading a story, I can find it hard to imagine what the characters might look like.</td>
            <td id="htqf8">-</td>
        </tr>
        <tr>
            <td>Q9</td>
            <td>I am fascinated by dates.</td>
            <td id="htqf9">-</td>
        </tr>
        <tr>
            <td>Q10</td>
            <td>In a social group, I cant easily keep track of several different people's conversations.</td>
            <td id="htqf10">-</td>
        </tr>
        <tr>
            <td>Q11</td>
            <td>I find social situations difficult.</td>
            <td id="htqf11">-</td>
        </tr>
        <tr>
            <td>Q12</td>
            <td>I tend to notice details that others do not.</td>
            <td id="htqf12">-</td>
        </tr>
        <tr>
            <td>Q13</td>
            <td>I would rather go to a library than a party.</td>
            <td id="htqf13">-</td>
        </tr>
        <tr>
            <td>Q14</td>
            <td>I find making up stories difficult.</td>
            <td id="htqf14">-</td>
        </tr>
        <tr>
            <td>Q15</td>
            <td>I find myself drawn more strongly to things than to people.</td>
            <td id="htqf15">-</td>
        </tr>
        <tr>
            <td>Q16</td>
            <td>I tend to have very strong interests which I get upset about if I can't pursue.</td>
            <td id="htqf16">-</td>
        </tr>
        <tr>
            <td>Q17</td>
            <td>I don't enjoy social chit-chat.</td>
            <td id="htqf17">-</td>
        </tr>
        <tr>
            <td>Q18</td>
            <td>When I talk, it isn't always easy for others to get a word in edgeways.</td>
            <td id="htqf18">-</td>
        </tr>
        <tr>
            <td>Q19</td>
            <td>I am fascinated by numbers.</td>
            <td id="htqf19">-</td>
        </tr>
        <tr>
            <td>Q20</td>
            <td>When I'm reading a story, I find it difficult to work out the characters' intentions.</td>
            <td id="htqf20">-</td>
        </tr>
        <tr>
            <td>Q21</td>
            <td>I don't particularly enjoy reading fiction.</td>
            <td id="htqf21">-</td>
        </tr>
        <tr>
            <td>Q22</td>
            <td>I find it hard to make new friends.</td>
            <td id="htqf22">-</td>
        </tr>
        <tr>
            <td>Q23</td>
            <td>I notice patterns in things all the time.</td>
            <td id="htqf23">-</td>
        </tr>
        <tr>
            <td>Q24</td>
            <td>I would rather go to a museum than to the theatre.</td>
            <td id="htqf24">-</td>
        </tr>
        <tr>
            <td>Q25</td>
            <td>It upsets me if my daily routine is disturbed.</td>
            <td id="htqf25">-</td>
        </tr>
        <tr>
            <td>Q26</td>
            <td>I frequently find that I don't know how to keep a conversation going.</td>
            <td id="htqf26">-</td>
        </tr>
        <tr>
            <td>Q27</td>
            <td>I find it hard to "read between the lines" when someone is talking to me.</td>
            <td id="htqf27">-</td>
        </tr>
        <tr>
            <td>Q28</td>
            <td>I usually concentrate more on the small details than on the whole picture.</td>
            <td id="htqf28">-</td>
        </tr>
        <tr>
            <td>Q29</td>
            <td>I am very good at remembering phone numbers.</td>
            <td id="htqf29">-</td>
        </tr>
        <tr>
            <td>Q30</td>
            <td>I usually notice small changes in a situation, or a person's appearance.</td>
            <td id="htqf30">-</td>
        </tr>
        <tr>
            <td>Q31</td>
            <td>I don't know how to tell if someone listening to me is getting bored.</td>
            <td id="htqf31">-</td>
        </tr>
        <tr>
            <td>Q32</td>
            <td>I find it hard to do more than one thing at once.</td>
            <td id="htqf32">-</td>
        </tr>
        <tr>
            <td>Q33</td>
            <td>When I talk on the phone, I'm not sure when it's my turn to speak.</td>
            <td id="htqf33">-</td>
        </tr>
        <tr>
            <td>Q34</td>
            <td>I don't enjoy doing things spontaneously.</td>
            <td id="htqf34">-</td>
        </tr>
        <tr>
            <td>Q35</td>
            <td>I am often the last to understand the point of a joke.</td>
            <td id="htqf35">-</td>
        </tr>
        <tr>
            <td>Q36</td>
            <td>I find it hard to work out what someone is thinking or feeling just by looking at their face.</td>
            <td id="htqf36">-</td>
        </tr>
        <tr>
            <td>Q37</td>
            <td>If there is an interruption, I can't easily' switch back to what I was doing.</td>
            <td id="htqf37">-</td>
        </tr>
        <tr>
            <td>Q38</td>
            <td>I am bad at social chit-chat.</td>
            <td id="htqf38">-</td>
        </tr>
        <tr>
            <td>Q39</td>
            <td>People often tell me that I keep going on and on about the same thing.</td>
            <td id="htqf39">-</td>
        </tr>
        <tr>
            <td>Q40</td>
            <td>When I was young, I did not enjoy playing games which involving pretending with other children.</td>
            <td id="htqf40">-</td>
        </tr>
        <tr>
            <td>Q41</td>
            <td>I like to collect information about categories of things (e.g. types of car, types of bird, types of train, types of plant, etc.).</td>
            <td id="htqf41">-</td>
        </tr>
        <tr>
            <td>Q42</td>
            <td>I find it difficult to imagine what it would be like to be someone else.</td>
            <td id="htqf42">-</td>
        </tr>
        <tr>
            <td>Q43</td>
            <td>I like to plan any activities I participate in carefully.</td>
            <td id="htqf43">-</td>
        </tr>
        <tr>
            <td>Q44</td>
            <td>I don't 'enjoy social occasions.</td>
            <td id="htqf44">-</td>
        </tr>
        <tr>
            <td>Q45</td>
            <td>I find it difficult to work out people's intentions.</td>
            <td id="htqf45">-</td>
        </tr>
        <tr>
            <td>Q46</td>
            <td>New situations make me anxious.</td>
            <td id="htqf46">-</td>
        </tr>
        <tr>
            <td>Q47</td>
            <td>I don't 'enjoy meeting new people.</td>
            <td id="htqf47">-</td>
        </tr>
        <tr>
            <td>Q48</td>
            <td>I am not a good diplomat.</td>
            <td id="htqf48">-</td>
        </tr>
        <tr>
            <td>Q49</td>
            <td>I am not very good at remembering people's date of birth.</td>
            <td id="htqf49">-</td>
        </tr>
        <tr>
            <td>Q50</td>
            <td>I find it very hard to play games with children that involve pretending.</td>
            <td id="htqf50">-</td>
        </tr>
        </tbody>
    </table>
</div>

<input type="button" onClick="checkScores();validateScores(); fillHidTable();" value="Save Your Answers">
<input type="button" onClick="checkScores();validateScores(); calculateAQ(); " value="Calculate Your Score">

</div>
</div>
</div>

<div class="modal fade text-center" id="jbean" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Jellibean</h4>
            </div>
            <div class="modal-body ">
                
                    <br>Jellibeans is a search engine that guides you to formulate your query.
                    <br>To get started try out the Autism Assessment below.
                    <br> You can save your answers so that you dont have to complete the assesment each time you sign in.
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>LeapManager.init({interactiveSelector:"a",maxCursors:1});</script>

@stop