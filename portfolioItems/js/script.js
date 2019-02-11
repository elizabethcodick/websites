myProjects([
    {
        "image": "images/ambiguityImage.png",
		"name": "Exercise 1b",
        "description": "Illustration of the topic Ambiguity Effect.",
        "page": "pages/exercise1b.php"
    },
    {
        "image": "images/XcodeIcon.png",
		"name": "User Flow Diagram",
        "description": "Personal interactive paradigm poster that displays a goal for a user to complete.",
        "page": "pages/userFlowDiagram.php"
    },
    {
        "image": "images/XcodeIcon.png",
		"name": "Redo User Flow Diagram",
        "description": "<b>Updated</b>. Personal interactive paradigm poster that displays a goal for a user to complete.",
        "page": "pages/redoUserFlowDiagram.php"
    },
    {
        "image": "images/Versus_sign.png",
		"name": "Beauty Vs. Usefulness",
        "description": "What is more important bueaty or functionaily?",
        "page": "pages/beautyVsUse.php"
    },
    {
        "image": "images/quoteMe.png",
		"name": "App Design: Quote Me",
        "description": "A prototype interface for a native app.",
        "page": "pages/appDesign.php"
    },
    {
        "image": "images/behancePage.png",
		"name": "Re-Design: Behance",
        "description": "Improvments that could be made to the website Behance.",
        "page": "pages/reDesign.php"
    },
    {
        "image": "images/hicksLaw.png",
		"name": "Universal Principles",
        "description": "Research on Hick's Law and presentation.",
        "page": "pages/universalPrinciples.php"
    },
  ]);
  
  function myProjects(arr) {
    var out = "";
    var i;
    for(i = 0; i<arr.length; i++) {
      out += '<div class="col-lg-3 col-md-6 mb-4"><div class="card">'+
      '<img style="height:200px" class="card-img-top" src="'+arr[i].image+'" alt="">'+
      '<div class="card-body"><h4 class="card-title">'+arr[i].name+'</h4>'+
      '<p class="card-text">'+arr[i].description+'</p></div><div class="card-footer">'+
      '<a href="'+arr[i].page+'" class="btn btn-primary">Learn More!</a></div></div></div>';
    }
    document.getElementById("projects").innerHTML = out;
  }

  myDiscussions([
    {
        "image": "images/ambiguityImage.png",
		"name": "Cognitive Illusions",
        "description": "Report on one cognitive illusion from Pohl (2004). Ambiguity Effect.",
        "page": "pages/exercise1b.php"
    },
    {
        "image": "images/inputGestures.jpg",
		"name": "Inputs / Outputs",
        "description": "Research and a create a summary presentation for a chosen computer input or output modality.",
        "page": "pages/inputOutput.php"
    },
    {
        "image": "images/hicksLaw.png",
		"name": "Universal Design Principles",
        "description": "Review the contents form Lidwell's 'Universal Principles of Design' and research one topic further.",
        "page": "pages/universalPrinciples.php"
    },
    {
        "image": "images/Basic_Wireframe.png",
		"name": "Wireframed",
        "description": "Chose a wireframing tool that you have never used before, to create a wireframe design.",
        "page": "pages/wireframes.php"
    },
    {
        "image": "images/pencilPaper.JPG",
		"name": "Sketchbook",
        "description": "Brain–Hand–Paper. Sketching new ideas and ways to improve products.",
        "page": "pages/sketchbook.php"
    },
    {
        "image": "images/behancePage.png",
		"name": "Evaluation",
        "description": "Critically evaluate website Behance.",
        "page": "pages/reDesign.php"
    }
  ]);
  
  function myDiscussions(arr) {
    var out = "";
    var i;
    for(i = 0; i<arr.length; i++) {
      out += '<div class="col-lg-3 col-md-6 mb-4"><div class="card">'+
      '<img style="height:200px" class="card-img-top" src="'+arr[i].image+'" alt="">'+
      '<div class="card-body"><h4 class="card-title">'+arr[i].name+'</h4>'+
      '<p class="card-text">'+arr[i].description+'</p></div><div class="card-footer">'+
      '<a href="'+arr[i].page+'" class="btn btn-primary">Learn More!</a></div></div></div>';
    }
    document.getElementById("discussions").innerHTML = out;
  }