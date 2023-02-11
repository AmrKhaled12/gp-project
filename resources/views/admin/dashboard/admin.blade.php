@extends('layouts.mainAdmin')
@section('content')
sdsdsdasdsd

{{-- asp.net هي دي الصفحه اللي كانت عندي ولازم اصلا تتغير عشان طريقه الكتابه متغيره عن    --}}
{{-- ------------------------------------------------------------------------------------------------------------ --}}



{{-- @model WebApplicationTest.ViewModel.All_Data
@{
    ViewBag.Title = "ViewResearch";
    Layout = "~/Views/Shared/_Layout.cshtml";
}
@{
    int i = 0;
}
@foreach (var item in Model.authorProfile)
{
    //Start Print Research
  <div class="container">
        @{var authorCreatedBy = Model.ListAuthor.Single(x => x.ID == item.IDAuthor); }

        <h1 class="p-3 mb-2 bg-secondary text-white"> <a class="nav-link text-white" href="@Url.Action("Comment", "Comment", new { IDResearch = item.ID })">@item.Title</a></h1>
        <br />
        <h3 class="text-info">
            @Html.DisplayFor(modelItem => item.CreationTime)
             <span style="position:relative;left:450px;">
                 <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:black;">
                 Created By :
                 </span> <a class="text-danger" href="@Url.Action("profile","Profile",new {dataProfile=authorCreatedBy.FristName})">@authorCreatedBy.FristName @authorCreatedBy.LastName</a>
             </span>
        </h3>
        <br />
        <p class="text-dark">@Html.DisplayFor(modelItem => item.GoalOfResearch)</p>
        <br />
        <a class="btn btn-danger" href="@Url.Content(item.Research)" target="_blank">View PDF</a>
   <hr />
  </div>

  //End Print Research

  //Start If Praticipants Authors  in Research
    if (Model.participantAuthors != null)
    {
        foreach (var p_author in Model.participantAuthors)
        {
            if (item.ID == p_author.id_research)
            {
                var author = Model.ListAuthor.Find(j => j.ID == p_author.id_author);
                <div class="container">
                    <p>
                        Participant Author :
                        @Html.ActionLink(author.FristName + author.LastName, "profile", "Profile", new { dataProfile = author.FristName }, null)
                    </p>
                </div>
            }
        }
     <hr class="container"/>
    }
  //Start If Praticipants Authors  in Research

 <div class="container">
   @*Start Check Number Of Like*@
   <div class="text-md-center">
    <p class="text-left">
           @{
               if (Model.NumberOfLike[i] != 0)
               {
             <span>@Model.NumberOfLike[i] LIKE </span>
            }
            else
            {
             <span>0 LIKE </span>
            }
            if (Model.NumberOfComment[i] != 0)
            {
             <span>@Model.NumberOfComment[i] COMMENT </span>
            }
            else
            {
             <span>0 COMMENT </span>
            }
          }
        </p>
   </div>
   @*End Check Number Of Like*@

   <hr />

    @*Start Check If Author is make Like or not*@
     <p>
        @{
          if (Model.likes.Count == 0)
          {
           @Html.ActionLink("Like", "Like", "Start", new { IDResearch = item.ID }, new { @class = "btn btn-primary" })
          }

          else
          {
                //لو اللي عامل لوجين عامل لايك علي بحث معين يظهرله زرارالديس لايك
             int countlike = 0;
             int countdislike = 0;
             foreach (var item1 in Model.likes)
             {
                int ids = Convert.ToInt32(Session["Id_author"]);
                if (item1.id_author == ids && item1.id_research == item.ID)
                {
                   if (item1.numOflike == 0)
                   {
                     @Html.ActionLink("Like", "Like", "Start", new { IDResearch = item.ID }, new { @class = "btn btn-primary" })
                     countlike = 1;
                   }
                   else
                   {
                    @Html.ActionLink("DisLike", "Dislike", "Start", new { IDResearch = item.ID }, new { @class = "btn btn-primary" })
                    countdislike = 1;
                   }
                }
             }

          if (countlike != 1 && countdislike != 1)
          {
           @Html.ActionLink("Like", "Like", "Start", new { IDResearch = item.ID }, new { @class = "btn btn-primary" })
          }

          }

        <span>
         @Html.ActionLink("Comment", "Comment", "Comment", new { IDResearch = item.ID }, new { @class = "btn btn-primary" })
        </span>
        i++;

       }
    </p>
    @*End Check If Author is make Like or not*@
 </div>
} --}}






{{-- ------------------------------------------------------------------------------------------------------------ --}}


@endsection
@section('title')
  Admin
@endsection
