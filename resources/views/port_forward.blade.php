<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>

    <h1>This is a Heading</h1>
    <p>This is a paragraph.</p>
    <button>
        Rext
    </button>
    <div class="result">

    </div>
    <script>
        const shareData = {
            title: "MDN",
            text: "Learn web development on MDN!",
            url: "https://developer.mozilla.org",
        };

        const btn = document.querySelector("button");
        const resultPara = document.querySelector(".result");

        // Share must be triggered by "user activation"
        btn.addEventListener("click", async () => {
            try {
                await navigator.share(shareData);
                resultPara.textContent = "MDN shared successfully";
            } catch (err) {
                resultPara.textContent = Error: $ {
                    err
                };
            }
        });
    </script>
</body>

</html>
