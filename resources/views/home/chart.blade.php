

         <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50">Our growth story</div>
            
            <canvas class="p-10" id="chartLine"></canvas>
          </div>
          
          <!-- Required chart.js -->
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          
          <!-- Chart line -->
          <script>
            const labels = ["January", "February", "March", "April", "May", "June"];
            const data = {
              labels: labels,
              datasets: [
                {
                  label: "Monthly guest numbers",
                  backgroundColor: "hsl(252, 82.9%, 89.8%)",
                  borderColor: "hsl(252, 82.9%, 67.8%)",
                  data: [0, 100, 150, 200, 250, 300, 450],
                },
              ],
            };
          
            const configLineChart = {
              type: "line",
              data,
              options: {},
            };
          
            var chartLine = new Chart(
              document.getElementById("chartLine"),
              configLineChart
            );
          </script>