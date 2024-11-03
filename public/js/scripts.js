function showDescription(jobId) {
    const modal = document.getElementById("description-modal");
    const titleElement = document.getElementById("modal-title");
    const descriptionElement = document.getElementById("modal-description");

    const job = allExperiences.find((job) => job.id === jobId);

    if (job) {
        titleElement.textContent = job.position;
        descriptionElement.textContent = job.description;

        modal.classList.remove("hidden");
    }
}

function closeModal(event) {
    if (
        event.target.id === "description-modal" ||
        event.target.id === "close-modal"
    ) {
        document.getElementById("description-modal").classList.add("hidden");
    }
}

let isMoreShown = false;

function toggleExperience() {
    const experienceList = document.getElementById("experience-list");

    if (!isMoreShown) {
        // Mostrar más experiencias
        allExperiences.forEach((experience, index) => {
            if (index >= 5) {
                // Solo agregar las experiencias restantes
                const experienceDiv = document.createElement("div");
                experienceDiv.className =
                    "bg-gray-700 p-4 rounded-lg transition-transform duration-300 transform cursor-pointer" +
                    (experience.end_date === null
                        ? " border-2 border-green-400 text-gray-200 hover:bg-gray-600 hover:text-white"
                        : " border-2 border-gray-500 text-gray-400 opacity-75 hover:bg-gray-600 hover:text-white");
                experienceDiv.setAttribute(
                    "onclick",
                    `showDescription(${experience.id})`
                );

                // Calcular la duración en años y meses
                const startDate = new Date(experience.start_date);
                const endDate = experience.end_date
                    ? new Date(experience.end_date)
                    : new Date();
                let diffYears = endDate.getFullYear() - startDate.getFullYear();
                let diffMonths = endDate.getMonth() - startDate.getMonth();

                if (diffMonths < 0) {
                    diffMonths += 12;
                    diffYears -= 1;
                }

                // Formatear el texto de duración
                let durationText = "";
                if (diffYears > 0) {
                    durationText +=
                        diffYears + " año" + (diffYears > 1 ? "s" : "");
                }
                if (diffMonths > 0) {
                    durationText +=
                        (durationText ? " y " : "") +
                        diffMonths +
                        " mes" +
                        (diffMonths > 1 ? "es" : "");
                }
                if (durationText.trim() === "") {
                    durationText = "0 meses";
                }

                // Añadir el HTML de la experiencia con duración calculada
                experienceDiv.innerHTML = `<div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold">${experience.position}</h3>
                    <p class="text-sm">${experience.company_name}</p>
                    <p class="text-sm">
                        ${startDate.toLocaleString("default", {
                            month: "short",
                            year: "numeric",
                        })} -
                        ${
                            experience.end_date
                                ? endDate.toLocaleString("default", {
                                      month: "short",
                                      year: "numeric",
                                  })
                                : "Presente"
                        }
                    </p>
                </div>
                <div class="text-sm text-gray-400">${durationText.trim()}</div>
            </div>`;

                experienceList.appendChild(experienceDiv);
            }
        });

        // Cambiar el texto del botón
        document.getElementById("show-more").textContent = "Mostrar menos";
    } else {
        // Ocultar experiencias adicionales
        while (experienceList.children.length > 5) {
            experienceList.removeChild(experienceList.lastChild);
        }

        // Cambiar el texto del botón
        document.getElementById("show-more").textContent = "Mostrar más";
    }

    isMoreShown = !isMoreShown; // Alternar el estado
}
