module ChapterProcessingFilter
	def process_chapters(chapterArray, page)
		chapterNumber = 0

		if chapterArray
			if chapterArray.size > 1
				linkChapter = true
			else
				linkChapter = false
			end

			for chapter in chapterArray do
				# Assign missing chapter numbers
				if chapter["number"] == nil
					chapter["number"] = chapterNumber + 1
					chapterNumber = chapter["number"]
				else
					chapterNumber = chapter["number"]
				end

				# Assign display name
				if page["chapter-name"] == nil
					page["chapter-name"] = "Kapitel"
				end
				if chapter["number"] && chapter["number"] != "/"
					if chapter["number"] == 0
						chapter["display-name"] = "Prolog"
					else
						chapter["display-name"] = page["chapter-name"] + " " + chapter["number"].to_s
					end
				end
				if chapter["name"] && chapter["name"] != "/"
					if chapter["display-name"]
						chapter["display-name"] += ": " + chapter["name"]
					else
						chapter["display-name"] = chapter["name"]
					end
				end

				# Assign missing footnote numbers
				if chapter["footnotes"]
					footnoteNumber = 0
					for footnote in chapter["footnotes"] do
						if footnote["number"] == nil
							footnote["number"] = footnoteNumber + 1
							footnoteNumber = footnote["number"]
						else
							footnoteNumber = footnote["number"]
						end
					end
				end

				# Assign IDs
				if linkChapter == true
					if chapter["number"] && chapter["number"] != "/"
						chapter["id"] = "Ch" + chapter["number"].to_s
						chapter["id-display"] = chapter["number"].to_s
					elsif chapter["name"] && chapter["name"] != "/"
						chapter["id"] = "Ch" + chapter["name"]
						chapter["id-display"] = chapter["name"]
					end
				end


				unless chapter["latin"] && chapter["german"]
					for section in chapter["sections"] do
						# Assign type
						if section["type"] == nil
							section["type"] = "translation"
						end

						# Assign style
						if section["style"] == nil
							if chapter["style"] == "poem"
								section["style"] = "poem"
							else
								section["style"] = "default"
							end
						end

						if section["style"] == "poem" && section["latin"] != nil && section["german"] != nil
							# Divide section in smaller sections
							latinVerses = section["latin"].split(/\n/)
							germanVerses = section["german"].split(/\n/)
							if latinVerses.size > 2
								verseNum = -2
								for i in 0..latinVerses.length-1
									# Create new section for every two verses, but ignore the first two of the original section (therefore the -2 above)
									verseNum += 1
									if verseNum == -1
										section["latin"] = latinVerses[i]
										section["german"] = germanVerses[i]
									elsif verseNum == 0
										section["latin"] += "\n" << latinVerses[i]
										section["german"] += "\n" << germanVerses[i]
									else
										if verseNum == 1 && i == latinVerses.length-1
											sectionNew = {"style" => "poem", "latin" => latinVerses[i], "german" => germanVerses[i]}
											chapter["sections"].insert(chapter["sections"].find_index(section) + i/2, sectionNew)
										elsif verseNum == 2
											verseNum = 0;
											sectionNew = {"style" => "poem", "latin" => latinVerses[i-1] << "\n" << latinVerses[i], "german" => germanVerses[i-1] << "\n" << germanVerses[i]}
											chapter["sections"].insert(chapter["sections"].find_index(section) + i/2, sectionNew)
										end
									end
								end
							end
						end
					end


					sectionNumber = 0
					lastSectionLines = 0
					for section in chapter["sections"] do
						# Assign missing section numbers
						if section["style"] == "poem"
							if section["number"] == nil
								if section["latin"] and sectionNumber > 0
									section["number"] = sectionNumber + lastSectionLines
								else
									section["number"] = sectionNumber + 1
								end
								sectionNumber = section["number"]
							else
								sectionNumber = section["number"]
							end
							lastSectionLines = section["latin"].lines.count
						end

						# Assign missing footnote numbers
						if section["footnotes"]
							footnoteNumber = 0
							for footnote in section["footnotes"] do
								if footnote["number"] == nil
									footnote["number"] = footnoteNumber + 1
									footnoteNumber = footnote["number"]
								else
									footnoteNumber = footnote["number"]
								end
							end
						end

						# Assign IDs
						if section["type"] == "translation"
							if section["number"] && section["number"] != "/"
								section["id"] = "Vr" + section["number"].to_s
								section["id-display"] = section["number"].to_s
							end
						elsif section["type"] == "story"
							if section["name"] && section["name"] != "/"
								section["id"] = "Ch" + section["name"]
								section["id-display"] = section["name"]
							end
						end
					end
				end
			end
		end
	end
end

Liquid::Template.register_filter(ChapterProcessingFilter)
