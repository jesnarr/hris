<div>


    <script>
        const image = document.getElementById('image')

        const clickImage = (event) => {
            $('#file').click()
            image.src = "{!! env('APP_URL') . '/placeholder.jpg' !!}"
        }

        const displayImage = (event) => {
            alert('zxc')
            setTimeout(() => {
                image.src = URL.createObjectURL(event.target.files[0])
            }, 1000)
        }
    </script>
</div>
