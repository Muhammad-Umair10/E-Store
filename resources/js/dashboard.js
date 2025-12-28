import $ from 'jquery';
import ApexCharts from 'apexcharts';
$(function () {



  // -----------------------------------------------------------------------
  // sales overview
  // -----------------------------------------------------------------------

  function generateRandomData(length, min, max) {
    const data = Array.from({ length }, () => Math.floor(Math.random() * (max - min + 1)) + min);
    console.log("Generated Data:", data);
    return data;
  }

  var options_sales_overview = {
    series: [
      {
        name: "Ample Admin",
        data: generateRandomData(6, 100, 400),
      },
      {
        name: "Pixel Admin",
        data: generateRandomData(6, 100, 400),
      },
    ],
    chart: {
      type: "bar",
      height: 275,
      toolbar: {
        show: false,
      },
      foreColor: "#adb0bb",
      fontFamily: "inherit",
      sparkline: {
        enabled: false,
      },
    },
    grid: {
      show: false,
      borderColor: "transparent",
      padding: {
        left: 0,
        right: 0,
        bottom: 0,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "25%",
        borderRadius: 5,
      },
    },
    colors: ["var(--bs-primary)", "var(--bs-secondary)"],
    dataLabels: {
      enabled: false,
    },
    yaxis: {
      show: true,
      min: 100,
      max: 400,
      tickAmount: 3,
    },
    stroke: {
      show: true,
      width: 5,
      lineCap: "butt",
      colors: ["transparent"],
    },
    xaxis: {
      type: "category",
      categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      axisBorder: {
        show: false,
      },
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      theme: "dark",
    },
    legend: {
      show: false,
    },
  };

  var salesOverviewElement = document.querySelector("#sales-overview");
  if (salesOverviewElement) {
    var chart_column_basic = new ApexCharts(
      salesOverviewElement,
      options_sales_overview
    );
    chart_column_basic.render();
  }


});

const editorElement = document.querySelector('#editor');
if (editorElement) {
  const uploadUrl = editorElement.dataset.uploadUrl;
  ClassicEditor
    .create(editorElement, {
      ckfinder: {
        uploadUrl: uploadUrl
      }
    })
    .then(editor => {
      console.log('Editor initialized successfully');
    })
    .catch(error => {
      console.error(error);
    });
}

function add_product() {
  console.log("Adding product...");
  alert("Product added successfully!");
}

window.add_product = add_product;

// removing placehoders

document.addEventListener('DOMContentLoaded', function () {
  const table_content = document.querySelectorAll('.loading')

  setTimeout(() => {
    table_content.forEach((content) => {
      content.classList.remove('placeholder');
    });
  }, 1500);
})

const toggle = document.getElementById('publishToggle');

// Logic can be added here to handle the "published" state change
toggle.addEventListener('change', function () {
  const isPublished = this.checked;
  console.log('Published state:', isPublished);
});